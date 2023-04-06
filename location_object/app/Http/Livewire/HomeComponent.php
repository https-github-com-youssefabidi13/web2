<?php

namespace App\Http\Livewire;

use App\Models\annonces;
use App\Models\carts;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class HomeComponent extends Component
{
    use WithPagination;
    public $pageSize =12;
    public $orderBy="Default Sorting";
    public $min_value=0;
    public $max_value=1000;
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }
    public function changePageSize($size){
        $this->pageSize=$size;
    }
    public function changeOrderBy($order){
        $this->orderBy=$order;
    }
    public function addToWishlist($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-icon-component','refreshComponent');
    }
    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem )
        {
            if($witem->id==$product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component','refreshComponent');
                return;
            }
        }
    }
    public function render()
    {
        if($this->orderBy== 'Price: Low to High'){
            $annonces = DB::table('annonces')
            ->join('products', 'products.id', '=', 'annonces.products_id')
            ->select('annonces.*', 'products.*')
            ->whereBetween('regular_price', [$this->min_value, $this->max_value])
            ->orderBy('regular_price', 'ASC')
            ->paginate($this->pageSize);
        }
        else if($this->orderBy== 'Price: High to Low'){
            $annonces = DB::table('annonces')
            ->join('products', 'products.id', '=', 'annonces.products_id')
            ->select('annonces.*', 'products.*')
            ->whereBetween('regular_price', [$this->min_value, $this->max_value])
            ->orderBy('regular_price', 'DESC')
            ->paginate($this->pageSize);
        }
        else if($this->orderBy== 'Sort By Newness'){
            $annonces = DB::table('annonces')
            ->join('products', 'products.id', '=', 'annonces.products_id')
            ->select('annonces.*', 'products.*')
            ->whereBetween('regular_price', [$this->min_value, $this->max_value])
            ->orderBy('annonces.created_at','DESC')
            ->paginate($this->pageSize);
        }
        else{
            $annonces = DB::table('annonces')
            ->join('products', 'products.id', '=', 'annonces.products_id')
            ->select('annonces.*', 'products.*')
            ->whereBetween('regular_price', [$this->min_value, $this->max_value])
            ->orderBy('regular_price', 'DESC')
            ->paginate($this->pageSize);
        }
        $categories=Category::orderBy('name','ASC')->get();
        $annoncesDate = DB::table('annonces')
            ->join('products', 'products.id', '=', 'annonces.products_id')
            ->select('annonces.*', 'products.*')
            ->whereBetween('regular_price', [$this->min_value, $this->max_value])
            ->orderBy('annonces.created_at','DESC')
            ->paginate($this->pageSize);
        $annoncesFeatured = DB::table('annonces')
            ->join('products', 'products.id', '=', 'annonces.products_id')
            ->select('annonces.*', 'products.*')
            ->whereBetween('regular_price', [$this->min_value, $this->max_value])
            ->orderBy('regular_price', 'DESC')
            ->paginate($this->pageSize);
        return view('livewire.home-component',['annonces'=>$annonces,'categories'=>$categories],['annoncesDate'=>$annoncesDate,'annoncesFeatured'=>$annoncesFeatured]);
    }
}
