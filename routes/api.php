<?php

use App\Http\Controllers\api\UsuarioController;
use App\Http\Controllers\api\PerfilController;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\RolController;
use Illuminate\Http\Request;

Route::apiResource('usuario',UsuarioController::class);
Route::get('usuario/{id}/perfil',[UsuarioController::class, 'showPerfil']);

Route::apiResource('perfil',PerfilController::class);

Route::apiResource('post',PostController::class);

Route::apiResource('rol',RolController::class);


