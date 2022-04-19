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
Route::get("mi_primer_web",function(){
  return view("examples.hello_world");
});
Route::get("test_template",function(){
  return view("layouts.template");
});
Route::get("test_template1",function(){
  return view("layouts.registro");
});

Route::get("registro_bootstrap",function(){
  return view("layouts.registro_bootstrap");
});

Route::get("Basic_Wizard",function(){
  return view ("layouts.wizard");
});

Route::get("example1",function(){
  return view ("layouts.example_1");
});

Route::get("example2",function(){
  return view ("layouts.example_2");
});

Route::get("examu2", function(){
  return view("examen.unidad2");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
