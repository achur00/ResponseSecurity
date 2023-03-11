<?php
// namespace app\Http\Controllers;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
// use App\Http\Controllers\productsController;
// use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('Pages.home');
    
// });
// Route::get('/', 'HomeController@index');

// home 
// Route::('/', [HomeController::class, 'index'])->name('home');
Route::resource('/', HomeController::class);

// about
// Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::resource('about', AboutController::class);

// contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact-us');

//  service
Route::get('/services', [ServiceController::class, 'index'])->name('services');
     //products
     Route::resource('products', ProductsController::class);


// csrf token
// Route::get('/token', function (Request $request) {
//     $token = $request->session()->token();
 
//     $token = csrf_token();
 
//     // ...
// });
