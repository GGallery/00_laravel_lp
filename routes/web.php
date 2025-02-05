<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', [QuestionController::class, 'index'])->name('index');
Route::post('/submit-answers', [GuestController::class, 'submitAnswers'])->name('submitAnswers'); // invia le risposte del questionario
Route::get('/result', [GuestController::class, 'result'])->name('result'); // Le visualizza
