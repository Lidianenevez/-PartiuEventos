<?php

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

Route::get('/', 'Site\InicialController@index')->name('inicial');

Auth::routes();

Route::get('/home', 'Admin\HomeController@index')->name('home');



// Route::get('/ufs/', function($uf = null){
//   return response()->json(\Artesaos\Cidade::select('uf')->distinct('uf')->orderBy('uf')->get());
// });

// Route::get('/cidades/{uf}', function($uf = null){
//   return response()->json(\Artesaos\Cidade::where('uf', $uf)->orderBy('nome')->get());
// });