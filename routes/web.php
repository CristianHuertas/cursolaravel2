<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\PostController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::controller(CursoController::class)->prefix('cursos')->group(function () {
    Route::get('/', 'index')->name('cursos.index');
}); */

// Route::get('/', [PostController::class, 'index'])->name('posts.index');
// Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');



Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('posts.index');
    Route::get('posts/{post}', 'show')->name('posts.show');
    Route::get('category/{category}', 'category')->name('posts.category');
    Route::get('tag/{tag}', 'tag')->name('posts.tag');



 });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
