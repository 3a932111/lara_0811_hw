<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[HomeController::class,'index']
)->name("home.index");

Route::get('/about',[AboutController::class,'index']
)->name("about.index");

Route::get('/news',[NewsController::class,'index']
)->name("news.index");

Route::get('/{where?}',function (){
    return view('home');
})->name("goto home.index");

Route::get('/{where2?}',function (){
    return view('news');
})->name("goto news.index");

Route::get('/{where3?}',function (){
    return view('about');
})->name("goto about.index");
