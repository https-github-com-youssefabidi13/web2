<?php

namespace App\Http\Livewire;

use App\Mail\emailbyAmine;
use App\Models\Annonce;
use App\Models\annonces;
use App\Models\carts;
use App\Models\demandes;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartComponent extends Component
{
//    public function increaseQuantity($rowId){
//        $product=Cart::instance('cart')->get($rowId);
//        $qty=$product->qty+1;
//        Cart::instance('cart')->update($rowId,$qty);
//        $this->emitTo('cart-icon-component','refreshComponent');
//    }
//    public function decreaseQuantity($rowId){
//        $product=Cart::instance('cart')->get($rowId);
//        $qty=$product->qty-1;
//        Cart::instance('cart')->update($rowId,$qty);
//        $this->emitTo('cart-icon-component','refreshComponent');
//    }
public $annonces;
public $buttonDisabled = false;
public $buttonClass = 'btn mr-10 mb-sm-15';

public function store($annonce_id, $user_id, $selectedDates)
{
    if ($this->buttonDisabled) {
        return;
    }

    $demande = new demandes([
        'annonce_id' => $annonce_id,
        'user_id' => $user_id,
        'reservation_Ddate' => implode(',', $selectedDates), // concatène toutes les dates sélectionnées en une chaîne de caractères
        'reservation_Fdate' => end($selectedDates), // enregistre la dernière date sélectionnée comme date de fin de réservation
    ]);

    $demande->save();


    // le reste du code pour envoyer un email et afficher des messages flash

    $annonce = DB::table('annonces')
        ->join('users', 'users.id', '=', 'annonces.user_id')
        ->join('products', 'products.id', '=', 'annonces.products_id')
        ->select('annonces.*', 'users.*', 'products.*')
        ->where('annonces.id', '=', $annonce_id)
        ->first();

    $user = User::findOrFail($user_id);
    // Send email in background using Laravel's Queue system
    Mail::to($annonce->email)
        ->queue(new emailbyAmine($user->email,$annonce));

    $this->emitTo('cart-icon-component', 'refreshComponent');

    session()->flash('error_message', 'En attente de confirmation de votre demande');
    session()->flash('alert-class', 'alert-danger text-red-700 text-xl font-bold');

    $this->buttonDisabled = true;
    $this->buttonClass = 'btn mr-10 mb-sm-15 bg-transparent text-gray-500 cursor-not-allowed';
}




    public function destroy($id){
        Cart::instance('cart')->remove($id);
        $cartCount = Cart::instance('cart')->count();
        $this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
        if($cartCount == 0){
            return redirect()->route('home.index');
        }
        return redirect()->route('shop.cart');
    }

    public function clearAll(){
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('home.index');
    }
    public function render()
    {
        return view('livewire.cart-component');
    }

}
