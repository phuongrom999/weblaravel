<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\users\Logincontroller;
use App\Http\Controllers\Admin\Maincontroller;
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

Route::get('Admin/users/login',[Logincontroller::class,'index']);
Route::post('Admin/users/login/store',[Logincontroller::class,'store']);

Route::get('Admin/main',[Maincontroller::class,'index'])->name('admin');