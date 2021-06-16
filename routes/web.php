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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
Route::get('/logout',function()
{
    auth()->logout();
    session()->flush();
    return Redirect::to('/');
})->name('keluar');

Route::get('/backend/blog', [App\Http\Controllers\Backend\BlogController::class, 'index'])->name('blogindex');
Route::get('/backend/create', [App\Http\Controllers\Backend\BlogController::class, 'create'])->name('blogcreate');
Route::get('/backend/edit', [App\Http\Controllers\Backend\BlogController::class, 'edit'])->name('blogedit');
Route::get('/backend/delete', [App\Http\Controllers\Backend\BlogController::class, 'destroy'])->name('blogdelete');
