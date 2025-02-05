<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        // Controlla se il cookie esiste già
        if (!$request->hasCookie('guest_token')) {

            $createdAt = now()->timestamp;
            return response()
                ->view('index')
                ->cookie('guest_token', $createdAt, 1); // 1 minuto
        }

        // se il cookie esiste ritorna 'index' 
        return view('index');
    }

    public function submitAnswers(Request $request)
    {
        $guestToken = $request->cookie('guest_token');

        // if (!$guestToken) {
        //     return redirect()->route('index')->withErrors(['error' => 'Guest token non trovato.']);
        // }

        // Prende le risposte escludendo il token csrf
        $answers = $request->except('_token');

        // Variabile d'appoggio contatore
        $counts = ['A' => 0, 'B' => 0, 'C' => 0];

        $answersData = [];

        foreach ($answers as $questionId => $answerId) {
            // Con find trova la risposta nel database
            $answer = Answer::find($answerId);
            if ($answer) {
                
                $answersData[$questionId] = $answer->answer;
                // incrementa il contatore appropriato
                
                if (strpos($answer->answer, 'A') !== false) {
                    $counts['A']++;
                } elseif (strpos($answer->answer, 'B') !== false) {
                    $counts['B']++;
                } elseif (strpos($answer->answer, 'C') !== false) {
                    $counts['C']++;
                }
            }
        }
        
        // Trova la risposta con il maggior numero di voti
        $result = array_keys($counts, max($counts))[0];
        // Variabile d'appoggio per profilo cioccolato, vaniglia, peperoncino
        $profile = '';

        if ($result == 'A') {
            $profile = 'PROFILO CIOCCOLATO';
        } elseif ($result == 'B') {
            $profile = 'PROFILO VANIGLIA';
        } elseif ($result == 'C') {
            $profile = 'PROFILO PEPERONCINO';
        }

        $answersData['profile'] = $profile;

        // Salva il risultato nel database
        Result::create([
            'guest_token' => $guestToken,
            'text_data' => json_encode($answersData),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('result')->cookie('profile', $profile, 1); // 1 minuto
    }

    public function result(Request $request)
    {
        // Ottiene il profilo del risultato dal cookie
        $profile = $request->cookie('profile');

        return view('result', compact('profile'));
    }
}
