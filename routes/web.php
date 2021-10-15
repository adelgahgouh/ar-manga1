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


Route::get('/manga/{manga}/', 'pagecontroller@manga');
Route::get('/manga/{manga}/chapter/{chapter}', 'pagecontroller@chapter');

/*
Route::get('/{name1}', function($name1){
    return view('pages.index')->with('name1',$name1);
});*/
//Route::get('/{name1}','pagecontroller@index');
Route::get('/','pagecontroller@index');
Route::get('/list-manga','pagecontroller@list');
Route::get('/myapi/list','pagecontroller@myapilist');

Route::get('/addformchapter','pagecontroller@insertformchapter');
Route::post('/insertchapter','pagecontroller@insertchapteroepration');

Route::get('/editads','pagecontroller@editadsform');
Route::post('/saveads','pagecontroller@editadsopration');

Route::get('/addformmanga','pagecontroller@insertformmanga');
Route::post('/insertmanga','pagecontroller@insertmangaoepration');

Route::get('/myapi/imgchapter/{idchapter}','pagecontroller@myapiimgchapter');
Route::get('/myapi/manga/{idanime}','pagecontroller@myapimanga');
Route::get('/myapi/chapter/{idanime}','pagecontroller@myapichapter');
Route::get('/myapi/list','pagecontroller@myapilist');


//Route::get('/{test}', ['uses' =>'pagecontroller@index']);
