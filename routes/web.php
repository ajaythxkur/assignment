<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ADMIN\AdminController;
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

Route::controller(AdminController::class)->group(function(){
    Route::get('/','show')->name('form.show');
    Route::post('/upload','doUpload')->name('form.submit');
    Route::get('/showExisted','showExisted');
});
