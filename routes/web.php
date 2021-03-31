<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerInfo;
use App\Http\Controllers\ControllerSav;
use App\Http\Controllers\ControllerPartenariat;
use App\Http\Controllers\ControllerFront;
use App\Http\Controllers\ControllerBack;

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

Route::get('/', [ControllerHome::class, 'index']);

Route::get('/contact/sav', [ControllerSav::class, 'index'])->name('sav');

Route::get('/contact/partenariat', [ControllerPartenariat::class, 'index'])->name('partenariat');

Route::get('/contact/info', [ControllerInfo::class, 'index'])->name('info');

Route::get('/team/front', [ControllerFront::class, 'index'])->name('front');

Route::get('/team/back', [ControllerBack::class, 'index'])->name('back');
