<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('waddup/{name}', function($name){
	echo 'Waddup ' . $name;
});

// UPDATE ITEM
Route::post('test', function(){
	echo 'POSTED';
});

// CREATE ITEM
Route::put('test', function(){
	echo 'PUT';
});
// DELETE ITEM
Route::delete('test', function(){
	echo 'DELETED';
});
// READ ITEM
Route::get('test', function(){
	echo '<form action = "test" method="POST">';
	echo '<input type ="submit" value="submit">';
	echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
	echo '<input type="hidden" name="_method" value="PUT">';
	echo '</form>';
});