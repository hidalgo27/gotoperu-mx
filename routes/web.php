<?php

use App\Http\Controllers\Page\HomepageController;
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

Route::get('/', [HomepageController::class, 'index'])->name('home_path');

//Route::get('/', [
//    'uses' => 'Page\HomepageController@index',
//    'as' => 'home_path',
//]);

Route::post('/agregar', [HomepageController::class, 'agregar'])->name('agregar_path');
Route::get('/load/packages', [HomepageController::class, 'load'])->name('load_path');
Route::get('/load/packages-all', [HomepageController::class, 'load_all'])->name('load_all_path');
Route::post('/formulario-diseno', [HomepageController::class, 'formulario_diseno'])->name('formulario_diseno_path');
Route::post('/formulario-detail', [HomepageController::class, 'formulario_detail'])->name('formulario_detail_path');

//package
Route::get('/packages', [HomepageController::class, 'packages'])->name('packages_path');

//detail
Route::get('/paquetes/{url}', [HomepageController::class, 'detail'])->name('detail_path');

//destinations
Route::get('/destination', [HomepageController::class, 'destination'])->name('destination_path');
Route::get('/destination/{url}', [HomepageController::class, 'destination_show'])->name('destination_show_path');

//category
Route::get('/category', [HomepageController::class, 'category'])->name('category_path');
Route::get('/category/{url}', [HomepageController::class, 'category_show'])->name('category_show_path');

//about
Route::get('/sobre-nosotros', [HomepageController::class, 'sobre_nosotros'])->name('sobre_nosotros_path');

//faq
Route::get('/preguntas-frecuentes', [HomepageController::class, 'faq'])->name('faq_path');

//testimonios
Route::get('/testimonios', [HomepageController::class, 'testimonios'])->name('testimonios_path');

//responsabilidad
Route::get('/responsabilidad-social', [HomepageController::class, 'responsabilidad'])->name('responsabilidad_path');

//landing
Route::get('/landing', [HomepageController::class, 'landing'])->name('landing_path');

////auth/callback
//Route::get('/auth/callback', [
//    'uses' => 'Page\HomepageController@callback',
//    'as' => 'callback_path',
//]);
//
//
//Route::post('/rdstation/{title}', [
//    'uses' => 'Page\HomepageController@rdstation',
//    'as' => 'rdstation_path',
//]);
