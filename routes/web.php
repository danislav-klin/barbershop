<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/about', [UserController::class, 'about'])->name('about');

Route::get('/barbers', [UserController::class, 'barbers'])->name('barbers');

Route::get('/blog', [UserController::class, 'blog'])->name('blog');

Route::get('/contacts', [UserController::class, 'contacts'])->name('contacts');

Route::post('/contact_post', [UserController::class, 'customer'])->name('form.contacts');

Route::get('/prices', [UserController::class, 'prices'])->name('prices');

Route::get('/form', [UserController::class, 'form'])->name('form.main');

Route::post('/form_post', [UserController::class, 'record'])->name('form.record');
