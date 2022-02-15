<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactsController;

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

Route::get('locale/{locale}', function ($locale) {
    \Illuminate\Support\Facades\Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');

Route::get('/', [HomeController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/service/{id}', [ServicesController::class, 'show']);
Route::get('/contacts', [ContactsController::class, 'index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
