<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('admin', function () {
    return 'Estas en el admin';
});

/* Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('posts.index');
    Route::get('posts/{post}', 'show')->name('posts.show');
    Route::get('category/{category}', 'category')->name('posts.category');
    Route::get('tag/{tag}', 'tag')->name('posts.tag');



 }); */