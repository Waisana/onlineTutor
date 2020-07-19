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
    return view('admin.dashboard.index');
})->name('dashboard');

Route::get('/assignment', function () {
    return view('admin.files.assignments');
})->name('assignment');

Route::get('/teachers', function() {
    return view('admin.teachers.index');
})->name('teachers');

Route::get('/students', function () {
    return view('admin.students.index');
})->name('students');

Route::get('/classes', function () {
    return view('admin.classes.index');
})->name('classes');

Route::get('/subjects', function () {
    return view('admin.subjects.index');
})->name('subjects');

Route::get('/files', function () {
    return view('admin.files.index');
})->name('files');

Route::get('/userLogs', function() {
    return view('admin.logs.index');
})->name('userLogs');

Route::get('/profile', function () {
    return view('auth.profile');
})->name('profile');

Route::get('/teacherAccounts', function () {
    return view('admin.accounts.teachers');
})->name('teacherAccounts');

Route::get('/studentsAccounts', function () {
    return view('admin.accounts.students');
})->name('studentsAccounts');

Route::get('/students/register', function () {
    return view('admin.accounts.studentsRegister');
})->name('studentsRegister');

Route::get('/teachers/register', function () {
    return view('admin.accounts.teachersRegister');
})->name('teachersRegister');

Route::get('/students/pages/', function () {
    return view('mainpages.students.index');
})->name('studentsPage');

Route::get('/teachers/pages/', function () {
    return view('mainpages.teachers.index');
})->name('teachersPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
