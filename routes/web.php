<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Controller;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',                     [Controller::class,     'login'])->name('login');
Route::post('/',                     [Controller::class,     'login_user'])->name('login.user');

Route::post('/logout',          [Controller::class,     'logout'])->name('logout');

Route::get('/signup',               [Controller::class,     'signup'])->name('signup');
Route::post('/signup',               [Controller::class,     'create_user'])->name('create.user');

Route::get('/dashboard',            [Controller::class,     'dashboard'])->name('dashboard');








Route::get('/courses',               [Controller::class, 'courses'])->name('courses');
Route::post('/courses',               [Controller::class, 'course_create'])->name('course.create');