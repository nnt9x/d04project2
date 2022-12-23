<?php

    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('home', function (){
    return view('site/home');
});

Route::get('/admin/home',[AdminController::class, 'viewHome'] );
Route::get('/admin/products',[AdminController::class,'viewAllProduct']);
Route::post('/admin/products/importExcel',[AdminController::class,'importProductsExcel']);

Route::get('/admin/settings',[AdminController::class,'viewSettings']);
Route::get('/admin/dashboard',[AdminController::class,'viewDashboard']);
Route::get('/admin/orders',[AdminController::class,'viewOrders']);


Route::get('/login', [LoginController::class,'viewLogin']);
Route::post('/login',[LoginController::class,'login']); // Ko co giao dien
Route::post('/logout',[LoginController::class,'logout']); // ko co giao dien

