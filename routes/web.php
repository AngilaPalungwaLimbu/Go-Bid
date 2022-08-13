<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// if (Auth::check()) {
//     if (Auth::user()->role == 'admin') {
//         Route::get('/', function () {
//             return view('admin.app');
//         });
//     } else {
//         Route::get('/', [PageController::class, 'home']);

//         // return view('frontend.pages.home');
//     }
// }
// else {
//     Route::get('/', function () {
//         return view('auth.login');
//     });

//
Route::get('/', function () {

    if (Auth::check()) {
        if (Auth::user()->role == 'admin') {
            return view('admin.app');
        } else {
            return redirect('home');
        }
    } else {
        return view('auth.login');
    }
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


// Route::resource('seller', SellerController::class);
Route::get('/seller/create', [SellerController::class, 'create']);
Route::get('/account', [PageController::class, 'account']);
Route::post('/seller', [SellerController::class, 'store']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/product_detail/{id}', [PageController::class, 'product']);
Route::post('/bid', [BidController::class, 'createBid']);
Route::get('/search', [PageController::class, 'search']);



Route::middleware(['isSeller'])->group(function () {
    // Route::resource('product', ProductController::class);
    Route::get('/product/create', [ProductController::class, 'create']);
    Route::post('/product', [ProductController::class, 'store']);

    Route::get('/seller', [SellerController::class, 'index']);
    Route::get('/seller/{id}', [SellerController::class, 'show']);
    Route::put('/seller/{id}', [SellerController::class, 'updaterole']);
    Route::resource('category', CategoryController::class);
});


Route::middleware(['isAdmin'])->group(function () {
    Route::get('/seller', [SellerController::class, 'index']);
    Route::get('/seller/{id}', [SellerController::class, 'show']);
    Route::put('/seller/{id}', [SellerController::class, 'updaterole']);
    Route::delete('/seller/{id}', [SellerController::class, 'delete']);
    Route::resource('category', CategoryController::class);
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/product-detail/{id}', [ProductController::class, 'product']);
    Route::delete('/productdelete/{id}', [ProductController::class, 'delete']);
});
