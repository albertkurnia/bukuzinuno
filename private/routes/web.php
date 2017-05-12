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
	return response()->json("Hello", 200);
});

$app->get('lagu', 'LaguController@index');
$app->post('lagu', 'LaguController@store');
$app->get('lagu/{nomor}', 'LaguController@show');




// $app->get('/get_all_judul', function () use ($app) {
// 	return $app['db']->select("select h.nomor, UPPER(h.judul) as judul, UPPER(h.lala_note) as lala_note, h.info_nada, h.row_status, h.created_at
// 		, h.created_by, h.updated_at, h.updated_by
// 		from tp_lagu h
// 		inner join tp_lirik d on d.nomor = h.nomor
// 		group by h.nomor, h.judul, h.lala_note, h.info_nada, h.row_status, h.created_at, h.created_by, h.updated_at, h.updated_by");
// });

// $app->get('/get_all_lirik', function () use ($app) {
// 	return $app['db']->select("select 
// 		d.nomor, d.urut_ayat, REPLACE(d.lirik, '<br>', '') as lirik
// 		from tp_lagu h
// 		inner join tp_lirik d on d.nomor = h.nomor
// 		group by d.nomor, d.urut_ayat, d.lirik
// 		order by d.nomor asc, d.urut_ayat asc");
// });
