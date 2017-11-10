<?php

/*
Route::get('/', function () {
	$s_sections = DB::table('studysections')->get();
    return view('welcome', compact('s_sections'));
});

Route::get('/study_sections', function () {
	$s_sections = DB::table('studysections')->get();
    return view('study_sections', compact('s_sections'));
});
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/studysection', 'StudySectionController@index');
Route::get('/studysection/create', 'StudySectionController@create');
Route::post('/studysections', 'StudySectionController@store');
Route::get('/studysection/{studysection}', 'StudySectionController@show');
Route::get('/config', 'Config@index');
Route::post('/studysection/{studysection}/goals','GoalsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
