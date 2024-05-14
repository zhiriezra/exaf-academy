<?php

use App\Http\Controllers\FrontController;
use App\Http\Livewire\Components\Success;
use App\Http\Livewire\RegistrationGaep;
use App\Http\Livewire\RegistrationSaep;
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

Route::get('/', [FrontController::class, 'welcome'])->name('welcome');

Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::get('/loginTest', [FrontController::class, 'loginTest'])->name('login.test');

Route::get('/register', [FrontController::class, 'register'])->name('register');
Route::post('/register', [FrontController::class, 'createAccount'])->name('register');

Route::get('/register-saep', RegistrationSaep::class)->name('register.saep');
Route::get('/register-gaep', RegistrationGaep::class)->name('register.gaep');
Route::get('/register-aepp', [FrontController::class, 'registerAepp'])->name('register.aepp');

Route::get('course-list', [FrontController::class, 'getCoursesByField'])->name('course-list');
Route::get('course/{course}',[FrontController::class, 'getSingleCourse'])->name('course.detail');
Route::get('course-catalogue', [FrontController::class, 'courseCatalogue'])->name('course.catalogue');

Route::get('program/saep', [FrontController::class, 'saep'])->name('pathway.saep');
Route::get('program/gaep', [FrontController::class, 'gaep'])->name('pathway.gaep');
Route::get('program/aepp', [FrontController::class, 'aepp'])->name('pathway.aepp');

Route::get('success', Success::class)->name('success');

Route::get('about-academy', [FrontController::class, 'about'])->name('about');
