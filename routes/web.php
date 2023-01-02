<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductAdd;
use App\Http\Controllers\Frontent\ProductShow;
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

Route::get('/addproducts',[ProductAdd::class,'addproducts'])->name('addproducts');
Route::post('/insertData',[ProductAdd::class,'insertData'])->name('insertData');
Route::get('/manage',[ProductAdd::class,'manage'])->name('manage');
Route::get('/delete/{id}',[ProductAdd::class,'delete'])->name('delete');
Route::get('/',[ProductShow::class,'home'])->name('home');
Route::get('/productdetail/{id}',[ProductShow::class,'productdetail'])->name('productdetail');
Route::get('/editpriduct/{id}',[ProductAdd::class,'editpriduct'])->name('editpriduct');
Route::post('/updateproduct/{id}',[ProductAdd::class,'updateproduct'])->name('updateproduct');


Route::get('/dashboard', function () {
    return view('backend.dashboard_page');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';