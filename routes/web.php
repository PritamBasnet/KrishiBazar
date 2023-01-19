<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AgricultureunitController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\ProductController;



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
Route::get('/landing',function (){
    return view('frontend.landingpage');
});
Route::get('/', function () {
    return view('welcome');
});


// Backend Routes


// Admin Route
Route::get('/admin/dashboard',function (){
    return view('backend.admin.pages.index');
});

//  Login And Register
Route::get('/admin/register', function (){
    return view('backend.admin.pages.register');
});
Route::get('/admin/login', function (){
    return view('backend.admin.pages.login');
});

// Category Routes
Route::get('/admin/dashboard/category/table',[CategoryController::class,'index'])->name('category.table');
Route::post('/admin/dashboard/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/admin/dashboard/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');
Route::get('/admin/dashboard/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/admin/dashboard/category/update/{id}',[CategoryController::class,'update'])->name('category.update');



// Location Routes
Route::get('/admin/dashboard/location/table',[LocationController::class,'index'])->name('location.table');
Route::post('/admin/dashboard/location/store',[LocationController::class,'store'])->name('location.store');
Route::get('/admin/dashboard/location/delete/{id}',[LocationController::class,'destroy'])->name('location.delete');
Route::get('/admin/dashboard/location/edit/{id}',[LocationController::class,'edit'])->name('location.edit');
Route::post('/admin/dashboard/location/update/{id}',[LocationController::class,'update'])->name('location.update');


// agricultureunit Routes
Route::get('/admin/dashboard/agricultureunit/table',[AgricultureunitController::class,'index'])->name('agricultureunit.table');
Route::post('/admin/dashboard/agricultureunit/store',[AgricultureunitController::class,'store'])->name('agricultureunit.store');
Route::get('/admin/dashboard/agricultureunit/delete/{id}',[AgricultureunitController::class,'destroy'])->name('agricultureunit.delete');
Route::get('/admin/dashboard/agricultureunit/edit/{id}',[AgricultureunitController::class,'edit'])->name('agricultureunit.edit');
Route::post('/admin/dashboard/agricultureunit/update/{id}',[AgricultureunitController::class,'update'])->name('agricultureunit.update');


// Service Routes
Route::get('/admin/dashboard/service/add',[ServiceController::class,'create'])->name('service.add');
Route::get('/admin/dashboard/service/table',[ServiceController::class,'index'])->name('service.table');
Route::post('/admin/dashboard/service/store',[ServiceController::class,'store'])->name('service.store');
Route::get('/admin/dashboard/service/delete/{id}',[ServiceController::class,'destroy'])->name('service.delete');
Route::get('/admin/dashboard/service/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
Route::post('/admin/dashboard/service/update/{id}',[ServiceController::class,'update'])->name('service.update');

// Blog Routes
Route::get('/admin/dashboard/blog/add',[BlogController::class,'create'])->name('blog.add');
Route::get('/admin/dashboard/blog/table',[BlogController::class,'index'])->name('blog.table');
Route::post('/admin/dashboard/blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('/admin/dashboard/blog/delete/{id}',[BlogController::class,'destroy'])->name('blog.delete');
Route::get('/admin/dashboard/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/admin/dashboard/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');


// Admin Registration
Route::post('/admin/store',[AdminController::class,'store'])->name('admin.store');
Route::post('/admin/check',[AdminController::class,'check'])->name('admin.check');
Route::get('/logout', function (){
    $user = Auth::user()->password;
    Auth::logout($user);
    Alert::success('logout succussfully', 'you got logout');
    return redirect('/admin/login');
});

// Product

Route::get('/admin/dashboard/product/add',[ProductController::class,'create'])->name('product.add');
Route::get('/admin/dashboard/product/table',[ProductController::class,'index'])->name('product.table');
Route::post('/admin/dashboard/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/admin/dashboard/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/admin/dashboard/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/admin/dashboard/product/update/{id}',[ProductController::class,'update'])->name('product.update');
