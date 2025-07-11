<?php

use App\Http\Controllers\MailSend;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', [UserController::class, 'loginView'])->name('loginView');
Route::post('/Login', [UserController::class, 'loginForm'])->name('loginForm');

Route::get('/Register', [UserController::class, 'registerView'])->name('registerView');
Route::post('/Register', [UserController::class, 'registerForm'])->name('registerForm');


Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/crudPanel', [UserController::class, 'crudPanel'])->name('crudPanel');

Route::get('/excluir/{id}', [UserController::class, 'crudExcluir'])->name('crudExcluir');
Route::get('/editar/{id}', [UserController::class, 'crudEditar'])->name('crudEditar');
Route::post('/editar', [UserController::class, 'crudEditPost'])->name('crudEditPost');

Route::post('/emailSend', [MailSend::class, 'sendMail'])->name('sendMail');

Route::get('/filter-emails', [UserController::class, 'filterEmails']);



