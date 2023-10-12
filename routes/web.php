<?php

use Illuminate\Support\Facades\Route;


//?Rutas de las vistas.  

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/noticias', [App\Http\Controllers\HomeController::class, 'news']);

Route::get('/logIn', [App\Http\Controllers\AutenticacionController::class, 'logIn']);

Route::post('/logIn', [App\Http\Controllers\AutenticacionController::class, 'logIning']);

Route::post('/logOut', [App\Http\Controllers\AutenticacionController::class, 'logOuting']);

Route::get('/admin/noticias', [\App\Http\Controllers\AdminController::class, 'index'])->middleware(['auth']);

Route::get('/admin/noticias/{id}', [\App\Http\Controllers\AdminController::class, 'details'])->whereNumber('id')->middleware(['auth']);

Route::get('/admin/noticias/crear', [\App\Http\Controllers\AdminController::class, 'create'])->middleware(['auth']);

Route::post('/admin/noticias/crear', [\App\Http\Controllers\AdminController::class, 'creating'])->middleware(['auth']);

Route::get('/admin/noticias/{id}/editar', [\App\Http\Controllers\AdminController::class, 'edit'])->whereNumber('id')->middleware(['auth']);

Route::post('/admin/noticias/{id}/editar', [\App\Http\Controllers\AdminController::class, 'editing'])->whereNumber('id')->middleware(['auth']);

Route::get('/admin/noticias/{id}/eliminar', [\App\Http\Controllers\AdminController::class, 'delete'])->whereNumber('id')->middleware(['auth']);

Route::post('/admin/noticias/{id}/eliminar', [\App\Http\Controllers\AdminController::class, 'deleting'])->whereNumber('id')->middleware(['auth']);

