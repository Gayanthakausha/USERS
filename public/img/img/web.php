<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/student/all', function () {
//    return view('student.index');
// });

Route::get('/login/logform', function () {
           return view('login.logform');
});
Route::get('/login/header', function () {
    return view('login.header');
});

Route::get('/login/footer', function () {
    return view('login.footer');
});

Route::get('/login/layout', function () {
    return view('login.layout');
});

Route::get('/login/first', function () {
    return view('login.first');
});

Route::get('/login/second', function () {
    return view('login.second');
});

Route::get('/login/third', function () {
    return view('login.third');
});

Route::get('/login/five', function () {
    return view('login.five');
});
Route::get('/login/six', function () {
    return view('login.six');
});

Route::get('/login/seven', function () {
    return view('login.seven');
});

Route::get('/login/eight', function () {
    return view('login.eight');
});

Route::get('/login/nine', function () {
    return view('login.nine');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('as');
});

Route::view('/login/six', 'login/six');





Route::get('/student/all',[StudentController::class, 'index'])->name('student.name');
Route::get('student/create',[StudentController::class, 'create'])->name('student.create');
Route::get('/student/store',[StudentController::class, 'store'])->name('student.store');




