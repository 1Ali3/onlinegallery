<?php

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

use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class); //главная страница
Route::get('/feedback', function() { return view("feedback"); }); //возвращает шаблон (view("feedback"))
Route::post('/feedback', Controllers\FeedbackController::class); //обрабатывает форму и отправляет данные в бд в контроллере 
Route::get('/gallery/{id}', Controllers\GalleryController::class); //
Route::get('/about', function() { return view("about"); }); //
Route::get('/profile', function() { return view("profile"); })->middleware(['auth']); //


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
