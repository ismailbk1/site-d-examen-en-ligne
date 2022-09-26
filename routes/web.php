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

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/debut' , 'visiteurcontrolleur@debut')->middleware('auth');
Route::get('/start/{id}' , 'visiteurcontrolleur@start')->middleware('auth');
Route::get('/profilvisiteur' , 'visiteurcontrolleur@profilvisiteur')->middleware('auth');
Route::get('/retour' , 'visiteurcontrolleur@profilvisiteur')->middleware('auth');
Route::post('/postuler' , 'DemandeController@postuler')->middleware('auth');


// action des admin sur les questions 
Route::get('/admin/queston' , 'QuestionsController@question')->middleware('auth');
Route::post('/admin/question/store' , 'QuestionsController@store')->middleware('auth');
Route::post('/admin/question/update' , 'QuestionsController@update')->middleware('auth');
Route::get('/admin/question/destory/{id}' , 'QuestionsController@destory')->middleware('auth');

// action des admin sur les technologies 
Route::get('/admin/technologie' , 'TechnologiesController@technologie')->middleware('auth');
Route::post('/admin/technologie/store' , 'TechnologiesController@store')->middleware('auth');
Route::post('/admin/technologie/update' , 'TechnologiesController@update')->middleware('auth');
Route::get('/admin/technologie/destory/{id}' , 'TechnologiesController@destory')->middleware('auth');

// action des admin sur les posts 
Route::get('/admin/post' , 'PostController@post')->middleware('auth');
Route::post('/admin/post/store' , 'PostController@store')->middleware('auth');
Route::post('/admin/post/update' , 'PostController@update')->middleware('auth');
Route::get('/admin/post/destory/{id}' , 'PostController@destory')->middleware('auth');
Route::get('/admin/post/dispo/{id}' , 'PostController@dispo')->middleware('auth');

// action de Admin sur leur profil
Route::get('/editprofil' , 'admin@editprofil')->middleware('auth');
Route::post('/update' , 'admin@update')->middleware('auth');

// les qcm

Route::get('/first/{id}' , 'QuestionsController@first');
Route::post('/submitans' , 'QuestionsController@submitans')->middleware('auth');
Route::get('/correction/{id}' , 'QuestionsController@correction')->middleware('auth');


//action de admin sur le visiteur

Route::get('/admin/visiteur' , 'QuestionsController@visiteur')->middleware('auth');
Route::get('/admin/Condidats' , 'QuestionsController@Condidats')->middleware('auth');
Route::post('/admin/user/update' , 'visiteurcontrolleur@update')->middleware('auth');
Route::get('/admin/question/destoryuser/{id}' , 'QuestionsController@destoryuser')->middleware('auth');
Route::get('/admin/question/destoryreponse/{id}' , 'QuestionsController@destoryreponse')->middleware('auth');

// action de admin sur leur profil
Route::get('/visiteur/editprofil' , 'visiteurcontrolleur@editprofil')->middleware('auth');
Route::get('/visiteur/profil' , 'visiteurcontrolleur@profil')->middleware('auth');


//liste demande
Route::get('/admin/demande' , 'DemandeController@demandes')->middleware('auth');