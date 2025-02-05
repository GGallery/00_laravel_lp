<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', [QuestionController::class, 'index'])->name('index');

Route::post('/submit-answers', [GuestController::class, 'submitAnswers'])->middleware('throttle:submit-answers')->name('submitAnswers');  // invia le risposte del questionario. il middleware throttle limita il numero di richieste per IP (Rate limit).

Route::get('/result', [GuestController::class, 'result'])->name('result'); // Le visualizza

