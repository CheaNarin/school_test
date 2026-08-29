<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/layout/app', function () {
    return view('layout.app');
});
Route::get('/student/index',[StudentController::class,'index'])->name('student.index');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
Route::delete('/student/destroy/{id}',[StudentController::class,'destroy'])->name('student.destroy');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/update/{id}',[StudentController::class,'update'])->name('student.update');

// tacher
Route::get('/teaher/index',[TeacherController::class,'index'])->name('teacher.index');
Route::get('/teaher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('/teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::delete('/teacher/destroy/{id}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('/teacher/edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
Route::put('/teacher/update/{id}',[TeacherController::class,'update'])->name('teacher.update');



Route::get('/login',[AuthController::class,'loginForm'])->name('loginForm');
Route::post('/login',[AuthController::class,'login'])->name('auth.login');
Route::get('/register',[AuthController::class,'registerForm'])->name('registerForm');
Route::post('/register',[AuthController::class,'register'])->name('auth.register');


