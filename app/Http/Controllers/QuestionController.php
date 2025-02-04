<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;



class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();

        return view('index', compact('questions'));
    }
}
