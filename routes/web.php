<?php

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
    return view('frondend.index');
});
Route::get('/dashbord', function () {
    return view('admin.dashbord');
    });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// MyProfile

Route::get('/my-profile',[App\Http\Controllers\Frontend\UserController::class,'myprofile']);
Route::post('/my-profile-update',[App\Http\Controllers\Frontend\UserController::class,'profileupdate']);

// Registered-user
Route::get('registered-user',[App\Http\Controllers\Admin\RegisteredController::class,'index']);
Route::get('role-edit/{id}',[App\Http\Controllers\Admin\RegisteredController::class,'edit']);
Route::put('role-update/{id}',[App\Http\Controllers\Admin\RegisteredController::class,'update']);

//Groups
Route::get('/group',[App\Http\Controllers\Admin\GroupController::class,'index']);
Route::get('/group-add',[App\Http\Controllers\Admin\GroupController::class,'create']);
Route::post('/group-store',[App\Http\Controllers\Admin\GroupController::class,'store']);
Route::get('group-edit/{id}',[App\Http\Controllers\Admin\GroupController::class,'edit']);
Route::put('group-update/{id}',[App\Http\Controllers\Admin\GroupController::class,'update']);
Route::get('group-delete/{id}',[App\Http\Controllers\Admin\GroupController::class,'delete']);
Route::get('group-deleted-records',[App\Http\Controllers\Admin\GroupController::class,'deletedrecorde']);
Route::get('group-re-store/{id}',[App\Http\Controllers\Admin\GroupController::class,'restore']);

//Category
Route::get('/category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
Route::get('/category-add',[App\Http\Controllers\Admin\CategoryController::class,'create']);
Route::post('/category-store',[App\Http\Controllers\Admin\CategoryController::class,'store']);
Route::get('category-edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
Route::put('category-update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update']);
Route::get('category-delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'delete']);
Route::get('category-deleted-records',[App\Http\Controllers\Admin\CategoryController::class,'deletedrecorde']);
Route::get('category-re-store/{id}',[App\Http\Controllers\Admin\CategoryController::class,'restore']);

//Sub-category
Route::get('/sub-category',[App\Http\Controllers\Admin\SubcategoryController::class,'index']);
Route::post('/sub-category-store',[App\Http\Controllers\Admin\SubcategoryController::class,'store']);
Route::get('sub-category-edit/{id}',[App\Http\Controllers\Admin\SubcategoryController::class,'edit']);
Route::put('sub-category-update/{id}',[App\Http\Controllers\Admin\SubcategoryController::class,'update']);
Route::get('sub-category-delete/{id}',[App\Http\Controllers\Admin\SubcategoryController::class,'delete']);
Route::get('sub-category-deleted-records',[App\Http\Controllers\Admin\SubcategoryController::class,'deletedrecorde']);
Route::get('subcategory-re-store/{id}',[App\Http\Controllers\Admin\SubcategoryController::class,'restore']);

//products

Route::get('/products',[App\Http\Controllers\Admin\ProductController::class,'index']);
Route::get('add-products',[App\Http\Controllers\Admin\ProductController::class,'create']);
Route::post('product-store',[App\Http\Controllers\Admin\ProductController::class,'store']);
Route::get('product-edit/{id}',[App\Http\Controllers\Admin\ProductController::class,'edit']);
Route::put('update-product/{id}',[App\Http\Controllers\Admin\ProductController::class,'update']);
Route::get('product-delete/{id}',[App\Http\Controllers\Admin\ProductController::class,'delete']);
Route::get('product-deleted-records',[App\Http\Controllers\Admin\ProductController::class,'deletedrecordes']);
Route::get('product-re-store/{id}',[App\Http\Controllers\Admin\ProductController::class,'restore']);

//Admin profile
Route::get('/profile',[App\Http\Controllers\Admin\UserController::class,'myprofile']);
Route::post('/profile-update',[App\Http\Controllers\Admin\UserController::class,'profileupdate']);

//Frontend

Route::get('collections',[App\Http\Controllers\Frontend\CollectionController::class,'index']);
Route::get('collection/{group_url}',[App\Http\Controllers\Frontend\CollectionController::class,'groupview']);


