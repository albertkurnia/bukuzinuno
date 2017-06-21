<?php

use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function (){
	return view("welcome");
});

$app->post('login', 'AuthController@doLogin');

$app->get('lagu', 'LaguController@index');
$app->post('lagu', 'LaguController@store');
$app->get('lagu/{cari}/cari', 'LaguController@cari');
$app->get('lagu/{nomor}', 'LaguController@show');
$app->put('lagu/{nomor}', 'LaguController@update');
$app->delete('lagu/{nomor}', 'LaguController@destroy');

$app->get('lagu/{nomor}/ayatsuggest', 'LirikController@ayatsuggest');
$app->get('lagu/{nomor}/ayat', 'LirikController@showAllLyric');
$app->post('lagu/{nomor}/ayat', 'LirikController@store');
$app->get('lagu/{nomor}/ayat/{ayat}', 'LirikController@show');
$app->put('lagu/{nomor}/ayat/{ayat}', 'LirikController@update');
$app->delete('lagu/{nomor}/ayat/{ayat}', 'LirikController@destroy');