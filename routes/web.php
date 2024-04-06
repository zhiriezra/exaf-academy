<?php

use App\Http\Controllers\FrontController;
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
})->name('welcome');

Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::get('/loginTest', [FrontController::class, 'loginTest'])->name('login.test');

Route::get('/register', [FrontController::class, 'register'])->name('register');
Route::post('/register', [FrontController::class, 'createAccount'])->name('register');

Route::get('course-list', [FrontController::class, 'getCoursesByField'])->name('course-list');
Route::get('course/{course}',[FrontController::class, 'getSingleCourse'])->name('course.detail');
Route::get('course-catalogue', [FrontController::class, 'courseCatalogue'])->name('course.catalogue');

Route::get('pathway/{slug}', [FrontController::class, 'pathway'])->name('pathway.detail');

Route::get('about-academy', [FrontController::class, 'about'])->name('about');
