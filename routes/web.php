<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;
use Illuminate\Support\Facades\Route;

//auth routes - user not logged
Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});

//app routes - user logged
Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/newnote', [MainController::class, 'newNote'])->name('new');
    Route::post('/newnoteSubmit', [MainController::class, 'newNoteSubmit'])->name('newNoteSubmit');
    //edit/delete note
    Route::get('/editnote/{id}', [MainController::class, 'editNote'])->name('edit');
    Route::post('/editnoteSubmit', [MainController::class, 'editNoteSubmit'])->name('editNoteSubmit');
    Route::get('/deletenote/{id}', [MainController::class, 'deleteNote'])->name('delete');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


