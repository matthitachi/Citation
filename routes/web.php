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
Route::get('refresh-csrf', function(){
    return csrf_token();
});
Route::get('/', 'Controller@index');
Route::get('apa/{source}', 'Controller@apa');
Route::get('mla/{source}', 'Controller@mla');
Route::get('ama/{source}', 'Controller@ama');
Route::get('acs/{source}', 'Controller@acs');
Route::get('asa/{source}', 'Controller@asa');
Route::get('chicago/{source}', 'Controller@chicago');
Route::get('apsa/{source}', 'Controller@aspa');
Route::get('ieee/{source}', 'Controller@ieee');
Route::get('harvard/{source}', 'Controller@havard');
Route::get('bluebook/{source}', 'Controller@bluebook');
Route::post('api/citation', 'Controller@cite');
Route::get('result/{source}/{style}', 'Controller@result');
Route::get('/test', function(){
  return "balo";
});


