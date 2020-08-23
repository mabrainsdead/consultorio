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

//Route::get('/', function () {
//    return view('getlist');
//});
Route::view('/', 'home')->name('home');

Route::view('/sangue', 'sangue')->name('sangue');

Route::view('/imagem_met_graf', 'imagem_met_graf')->name('imagem_met_graf');

Route::post('/cont_sangue', 'ProvideContr@cont_sangue')->name('cont_sangue');

Route::post('/cont_imagem_met_graf', 'ProvideContr@cont_imagem_met_graf')->name('cont_imagem_met_graf');

Route::view('/print_sangue', 'print_sangue')->name('print_sangue');

Route::view('/print_imagem_met_graf', 'print_imagem_met_graf')->name('print_imagem_met_graf');
