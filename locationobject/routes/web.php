<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\AnnonceController;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Controllers\feedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', HomeComponent::class)->name ('home.index');
//Route::get('/shop', ShopComponent::class)->name ('shop');
Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
//Route::get('/cart', CartComponent::class)->name ('shop.cart');
//Route::get('/checkout', CheckoutComponent::class)->name ('shop.checkout');
Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');
Route::get('/search',SearchComponent::class)->name('product.search');
//Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//Show add object Form : 
Route::get('/addObject' , [ObjectController::class , 'create'])->middleware('auth') ; 
//Store the Object Infos : 
Route::post('/addObject', [ObjectController::class , 'store'])->middleware('auth')->name('object.add');

//show add Annonce Form : 
Route::get('/addAnnonce' , [AnnonceController::class , 'create'])->middleware('auth')->name('annonce.add') ; 
//Store Annonce data : 
Route::post('/addAnnonce' , [AnnonceController::class , 'store'])->middleware('auth') ; 

Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/shop', ShopComponent::class)->name ('shop');
    Route::get('/cart', CartComponent::class)->name ('shop.cart');
    Route::get('/checkout', CheckoutComponent::class)->name ('shop.checkout');
    Route::get('/feedback/{demande_id}/{id}', [feedbackController::class, 'create'])->name('feedback.details');
    Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');
    Route::post('/feedback/add', [feedbackController::class, 'store']);

});


require __DIR__.'/auth.php';
