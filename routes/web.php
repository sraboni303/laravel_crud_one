<?php

use Illuminate\Support\Facades\Route;


// Home Route:
Route::get('/', function () {
    return view('home');
});



// Students Route:
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'students'], function(){

	Route::get('/', 'StudentController@index') -> name('students.index');

	Route::get('/create', 'StudentController@create') -> name('students.create');

	Route::post('/store', 'StudentController@store') -> name('students.store');

	Route::get('/delete/{id}', 'StudentController@delete') -> name('students.delete');

	Route::get('/show/{id}', 'StudentController@show') -> name('students.show');

	Route::get('/edit/{id}', 'StudentController@edit') -> name('students.edit');

});



// Teachers Route:
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'teachers'], function(){

	Route::get('/', 'TeacherController@index') -> name('teachers.index');

	Route::get('/create', 'TeacherController@create') -> name('teachers.create');

	Route::post('/store', 'TeacherController@store') -> name('teachers.store');

	Route::get('/delete/{id}', 'TeacherController@delete') -> name('teachers.delete');

	Route::get('/show/{id}', 'TeacherController@show') -> name('teachers.show');

	Route::get('/edit/{id}', 'TeacherController@edit') -> name('teachers.edit');

});


// Staff Route:
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'staff'], function(){

	Route::get('/', 'StaffController@index') -> name('staff.index');

	Route::get('/create', 'StaffController@create') -> name('staff.create');

	Route::post('/store', 'StaffController@store') -> name('staff.store');

	Route::get('/delete/{id}', 'StaffController@delete') -> name('staff.delete');

	Route::get('/show/{id}', 'StaffController@show') -> name('staff.show');

	Route::get('/edit/{id}', 'StaffController@edit') -> name('staff.edit');

});