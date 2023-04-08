<?php

namespace App\Http\Livewire;

use App\Models\carts;
use Livewire\Component;
use Cart;
class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $product=Cart::instance('cart')->get($rowId);
        $qty=$product->qty+1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }
    public function decreaseQuantity($rowId){
        $product=cart::instance('cart')->get($rowId);
        $qty=$product->qty-1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function store($product_id,$user_id) {
        $cartItem = new carts([
            'annonce_id' => $product_id,
            'user_id' => $user_id,
//            'quantity' => 1,
//            'product_price' => $product_price
        ]);

        $cartItem->save();

        $this->emitTo('cart-icon-component', 'refreshComponent');

        session()->flash('success_message', 'Item added to Cart');

        return redirect()->route('home.index');
    }

    public function destroy($id){
        Cart::instance('cart')->remove($id);
        $this->emitTo('cart-icon-component','refreshComponent');
        session()->flash('success_message','Item has been removed');
    }
    public function clearAll(){
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component','refreshComponent');
    }
    public function render()
    {
        return view('livewire.cart-component');
    }
}
