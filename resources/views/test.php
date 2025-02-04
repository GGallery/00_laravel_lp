<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        // Controlla se il cookie esiste già
        if (!$request->hasCookie('guest_token')) {
            // Genera un token random di 40 caratteri
            $token = Str::random(40);
            return response()
                ->view('index')
                ->cookie('guest_token', $token, 1); // 1 minuto
        }

        // se il cookie esiste ritorna 'index' 
        return view('index');
    }

    public function submitAnswers(Request $request)
    {
        // Prende le risposte escludendo il token csrf
        $answers = $request->except('_token');

        // Variabile d'appoggio contatore
        $counts = ['A' => 0, 'B' => 0, 'C' => 0];

        foreach ($answers as $answerId) {
            // Con find trova la risposta nel database
            $answer = Answer::find($answerId);
            if ($answer) {
                // Usa switch per incrementare il contatore appropriato
                switch ($answer->answer) {
                    case 'a) Risposta A':
                        $counts['A']++;
                        break;
                    case 'b) Risposta B':
                        $counts['B']++;
                        break;
                    case 'c) Risposta C':
                        $counts['C']++;
                        break;
                }
            }
        }

        // Trova la risposta con il maggior numero di voti
        $result = array_keys($counts, max($counts))[0];
        $profile = '';

        if ($result == 'A') {
            $profile = 'PROFILO CIOCCOLATO';
        } elseif ($result == 'B') {
            $profile = 'PROFILO VANIGLIA';
        } elseif ($result == 'C') {
            $profile = 'PROFILO PEPERONCINO';
        }

        return redirect()->route('result')->cookie('profile', $profile, 1); // 1 minuto
    }

    public function result(Request $request)
    {
        // Ottiene il profilo del risultato dal cookie
        $profile = $request->cookie('profile');

        return view('result', compact('profile'));
    }
}