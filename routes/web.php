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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mapel', ['as' => 'mapel.index', 'uses' => 'MapelController@index']);
Route::get('mapel/create', ['as' => 'mapel.create', 'uses' => 'MapelController@create']);
Route::post('mapel/create', ['as' => 'mapel.store', 'uses' => 'MapelController@store']);
Route::get('mapel/{id}/edit', ['as' => 'mapel.edit', 'uses' => 'MapelController@edit']);
Route::patch('mapel/{id}', ['as' => 'mapel.update', 'uses' => 'MapelController@update']);
Route::delete('mapel/{id}', ['as' => 'mapel.destroy', 'uses' => 'MapelController@destroy']);

Route::get('materi', ['as' => 'materi.index', 'uses' => 'MateriController@index']);
Route::get('materi/create', ['as' => 'materi.create', 'uses' => 'MateriController@create']);
Route::post('materi/create', ['as' => 'materi.store', 'uses' => 'MateriController@store']);
Route::get('materi/{id}/edit', ['as' => 'materi.edit', 'uses' => 'MateriController@edit']);
Route::patch('materi/{id}', ['as' => 'materi.update', 'uses' => 'MateriController@update']);
Route::delete('materi/{id}', ['as' => 'materi.destroy', 'uses' => 'MateriController@destroy']);

Route::get('soal', ['as' => 'soal.index', 'uses' => 'SoalController@index']);
Route::get('soal/create', ['as' => 'soal.create', 'uses' => 'SoalController@create']);
Route::post('soal/create', ['as' => 'soal.store', 'uses' => 'SoalController@store']);
Route::get('soal/{id}/edit', ['as' => 'soal.edit', 'uses' => 'SoalController@edit']);
Route::patch('soal/{id}', ['as' => 'soal.update', 'uses' => 'SoalController@update']);
Route::delete('soal/{id}', ['as' => 'soal.destroy', 'uses' => 'SoalController@destroy']);

Route::get('answerkey', ['as' => 'answerkey.index', 'uses' => 'AnswerKeyController@index']);
Route::get('answerkey/create', ['as' => 'answerkey.create', 'uses' => 'AnswerKeyController@create']);
Route::post('answerkey/create', ['as' => 'answerkey.store', 'uses' => 'AnswerKeyController@store']);
Route::get('answerkey/{id}/edit', ['as' => 'answerkey.edit', 'uses' => 'AnswerKeyController@edit']);
Route::patch('answerkey/{id}', ['as' => 'answerkey.update', 'uses' => 'AnswerKeyController@update']);
Route::delete('answerkey/{id}', ['as' => 'answerkey.destroy', 'uses' => 'AnswerKeyController@destroy']);