<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



/* Route::get('admin', function () {
    return 'Estas en el admin';
}); */

Route::controller(HomeController::class)->prefix('admin')->group(function () {
   Route::get('/', 'index')->name('admin.home');
});


Route::controller(CategoryController::class)->prefix('admin/categories')->group(function () {

   Route::get('/', 'index')->name('admin.categories.index');
   Route::get('create', 'create')->name('admin.categories.create');
   Route::get('{category}', 'show')->name('admin.categories.show');
   Route::post('store', 'store')->name('admin.categories.store');
   Route::get('edit/{category}', 'edit')->name('admin.categories.edit');
   Route::put('update/{category}', 'update')->name('admin.categories.update');
   Route::delete('destroy/{category}', 'destroy')->name('admin.categories.destroy');
});


Route::controller(TagController::class)->prefix('admin/tags')->group(function () {
   Route::get('/', 'index')->name('admin.tags.index');
   Route::get('create', 'create')->name('admin.tags.create');
   Route::get('{tag}', 'show')->name('admin.tags.show');
   Route::post('store', 'store')->name('admin.tags.store');
   Route::get('edit/{tag}', 'edit')->name('admin.tags.edit');
   Route::put('update/{tag}', 'update')->name('admin.tags.update');
   Route::delete('destroy/{tag}', 'destroy')->name('admin.tags.destroy');
});

Route::controller(AdminPostController::class)->prefix('admin/posts')->group(function () {
   Route::get('/', 'index')->name('admin.posts.index');
   Route::get('create', 'create')->name('admin.posts.create');
   Route::get('show', '{post}')->name('admin.posts.show');
   Route::post('store', 'store')->name('admin.posts.store');
   Route::get('edit/{post}', 'edit')->name('admin.posts.edit');
   Route::put('update/{post}', 'update')->name('admin.posts.update');
   Route::delete('destroy/{post}', 'destroy')->name('admin.posts.destroy');
});
