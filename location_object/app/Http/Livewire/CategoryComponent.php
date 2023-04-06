<?php

namespace App\Http\Livewire;

use App\Models\annonces;
use App\Models\carts;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize =12;
    public $orderBy="Default Sorting";
    public $slug;
    public function store($product_id,$product_name,$product_price) {
        \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->add($product_id,$product_name,1,$product_price);
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
    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $category=Category::where('slug',$this->slug)->first();
        $category_id=$category->id;
        $category_name=$category->name;
        if($this->orderBy == 'Price: Low to High'){
            $annonces = annonces::with('product')
            ->whereHas('product', function($query) use ($category_id) {
                $query->where('category_id', $category_id);
            })
            ->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Price: High to Low'){
            $annonces = annonces::with('product')
            ->whereHas('product', function($query) use ($category_id) {
                $query->where('category_id', $category_id);
            })
            ->paginate($this->pageSize);
        }
        else if($this->orderBy == 'Sort By Newness'){
            $annonces = annonces::with('product')
            ->whereHas('product', function($query) use ($category_id) {
                $query->where('category_id', $category_id);
            })
            ->paginate($this->pageSize);
        }
        else{
            $annonces = annonces::with('product')
            ->whereHas('product', function($query) use ($category_id) {
                $query->where('category_id', $category_id);
            })
            ->paginate($this->pageSize);
        }
        $categories=Category::orderBy('name','ASC')->get();
        return view('livewire.category-component',['annonces'=>$annonces,'categories'=>$categories,'category_name'=>$category_name]);
    }
}
