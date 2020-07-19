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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/assignment', function () {
    return view('files.assignments');
})->name('assignment');

Route::get('/teachers', function() {
    return view('teachers.index');
})->name('teachers');

Route::get('/students', function () {
    return view('students.index');
})->name('students');

Route::get('/classes', function () {
    return view('classes.index');
})->name('classes');

Route::get('/subjects', function () {
    return view('subjects.index');
})->name('subjects');

Route::get('/files', function () {
    return view('files.index');
})->name('files');

Route::get('/userLogs', function() {
    return view('logs.index');
})->name('userLogs');

Route::get('/profile', function () {
    return view('auth.profile');
})->name('profile');

Route::get('/teacherAccounts', function () {
    return view('accounts.teachers');
})->name('teacherAccounts');

Route::get('/studentsAccounts', function () {
    return view('accounts.students');
})->name('studentsAccounts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
