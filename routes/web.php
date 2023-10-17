<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ForgetPasswordManager;

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CaregiverController;
use App\Mail\Hello;
use Illuminate\Support\Facades\Mail;

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

/*Route::get('/', function () {
    return view('index');
});

Route::get('/login', [RegController::class,'login'])->name('login');
*/
//Home
Route::get('/', function () {
    return view('index');
})->name('home');

//Patient interface
Route::get('/Patient', function () {
    return view('Signin.welcome');
})->name('Patient');

//admin add caregiver
Route::get("/admin",[CaregiverController::class,"index"])->name("caregivers.index");
Route::get("/caregivers/create",[CaregiverController::class,"create"])->name("caregivers.create");
Route::post("/caregivers/store",[CaregiverController::class,"store"])->name("caregivers.store");


//admin curd
Route::get("caregivers/{id}/edit",[CaregiverController::class,"edit"]);
Route::put("caregivers/{id}/update",[CaregiverController::class,"update"]);
Route::delete("caregivers/{id}/delete",[CaregiverController::class,"destory"]);

Route::get('caregivers/{id}/show',[CaregiverController::class,'show']);


//login , logout, forgetpwd
Route::get('signin/login',[AuthManager::class, 'login'])->name('login');
Route::post('signin/login',[AuthManager::class, 'loginPost'])->name('login.post');

Route::get('regist/patient/registration',[AuthManager::class, 'registration'])->name('registration');
Route::post('regist/patient/registration',[AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/regist/registration', function () {
    return view("regist.registration");
})->name('regi');

Route::get('signin/logout',[AuthManager::class, 'logout'])->name('logout');

Route::get("signin/forget-password",[ForgetPasswordManager::class,"forgetPassword"])->name("forget.password");
Route::post("signin/forget-password",[ForgetPasswordManager::class,"forgetPasswordPost"])->name("forget.password.post");

Route::get("signin/reset-password/{token}",[ForgetPasswordManager::class,"resetPassword"])->name("reset.password");
Route::post("signin/reset-password",[ForgetPasswordManager::class,"resetPasswordPost"])->name("reset.password.post");
