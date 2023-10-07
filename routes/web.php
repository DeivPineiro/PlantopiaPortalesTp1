<?php

use Illuminate\Support\Facades\Route;


//?Rutas de las vistas.  

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/noticias', [App\Http\Controllers\HomeController::class, 'news']);

Route::get('/logIn', [App\Http\Controllers\HomeController::class, 'logIn']);

Route::get('/admin/noticias', [\App\Http\Controllers\AdminController::class, 'index']);

Route::get('/admin/noticias/{id}', [\App\Http\Controllers\AdminController::class, 'details'])->whereNumber('id');

Route::get('/admin/noticias/crear', [\App\Http\Controllers\AdminController::class, 'create']);

Route::post('/admin/noticias/crear', [\App\Http\Controllers\AdminController::class, 'creating']);

Route::get('/admin/noticias/{id}/editar', [\App\Http\Controllers\AdminController::class, 'edit'])->whereNumber('id');

Route::post('/admin/noticias/{id}/editar', [\App\Http\Controllers\AdminController::class, 'editing'])->whereNumber('id');

Route::get('/admin/noticias/{id}/eliminar', [\App\Http\Controllers\AdminController::class, 'delete'])->whereNumber('id');;

Route::post('/admin/noticias/{id}/eliminar', [\App\Http\Controllers\AdminController::class, 'deleting'])->whereNumber('id');;
