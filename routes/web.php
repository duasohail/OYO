<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('redirect',[HomeController::class, 'redirect']);
route::get('/',[HomeController::class, 'index']);
route::get('allproducts',[HomeController::class, 'allproducts']);
route::get('aboutoyo',[HomeController::class, 'aboutoyo']);
route::get('contact',[HomeController::class, 'contact']);



// admin
route::get('products',[AdminController::class, 'products']);
route::post('uploadproducts',[AdminController::class, 'uploadproducts']);
route::get('show_products',[AdminController::class, 'show_products']);
route::get('delete_product/{id}',[AdminController::class, 'delete_product']);
