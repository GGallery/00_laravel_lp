<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', [QuestionController::class, 'index']);
Route::get('/result', [GuestController::class, 'result'])->name('result');
Route::post('/submit-questionnaire', [GuestController::class, 'submitAnswers'])->name('submitAnswers');