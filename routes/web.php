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



Route::get('/teacherAccounts', function () {
    return view('admin.accounts.teachers');
})->name('teacherAccounts');

Route::get('/studentsAccounts', function () {
    return view('admin.accounts.students');
})->name('studentsAccounts');

Route::get('/students/register', function () {
    return view('auth.studentsRegister');
})->name('studentsRegister');

Route::get('/teachers/register', function () {
    return view('auth.teachersRegister');
})->name('teachersRegister');

Route::get('/students/pages/', function () {
    return view('mainpages.students.index');
})->name('studentsPage');

Route::get('/teachers/pages/', function () {
    return view('mainpages.teachers.index');
})->name('teachersPage');

// students assignement page
Route::get('/students/assignments', function () {
    return view('admin.files.assignementsstd');
})->name('stdassignment');




Route::get('/', 'HomeController@index')->name('welcome');

//Administrator routes
Route::get('/dashboard',"AdminController@index")->name('dashboard');
Route::get('/assignment', "AdminController@assignment")->name('assignment');
Route::get('/teachers', "AdminController@teachers")->name('teachers');
Route::get('/students', "AdminController@students")->name('students');
Route::get('/classes', "AdminController@classes")->name('classes');
Route::get('/subjects', "AdminController@subjects")->name('subjects');
Route::get('/files', "AdminController@files")->name('files');
Route::get('/userLogs', "AdminController@userLogs")->name('userLogs');
Route::get('/profile', "AdminController@profile")->name('profile');

// Authentication routes
Route::post("/register", "Auth\RegisterController@register");

Auth::routes();


