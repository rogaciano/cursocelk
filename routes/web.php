<?php

use App\Http\Controllers\CourseController;
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
});

// rotas relacionadas a cursos (courses)
Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/show-course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('/create-course', [CourseController::class, 'create'])->name('course.create');
Route::post('/store-course', [CourseController::class, 'store'])->name('course.store');
Route::get('/edit-course/{course}', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/update-course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('/destroy-course', [CourseController::class, 'destroy'])->name('course.destroy');