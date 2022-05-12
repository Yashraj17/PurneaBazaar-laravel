<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

///public home
Route::get('/',[PublicController::class,'index'])->name('homePage');
//public  view Product
Route::get('/product/{p_id}',[PublicController::class,'viewProduct'])->name('viewProduct');

//public cart 
Route::get('/cart',[PublicController::class,'cart'])->name("cart");
//public checkout
Route::get('/checkout',[PublicController::class,'checkout'])->name("checkout");


/////admin routes
Route::prefix('admin')->group(function (){
    Route::get('/',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/user',[AdminController::class,'manageuser'])->name('admin.manageUser');
    Route::resources([
        'product'=>App\Http\Controllers\ProductController::class,
        'category'=>App\Http\Controllers\CategoryController::class,
        'brand'=>App\Http\Controllers\BrandController::class,
        'coupon'=>App\Http\Controllers\CouponController::class,
        'order'=>App\Http\Controllers\OrderController::class,
        'payment'=>App\Http\Controllers\PaymentController::class,
        'user'=>App\Http\Controllers\UserController::class,
    ]);
});

//************Auth route*********************** */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
