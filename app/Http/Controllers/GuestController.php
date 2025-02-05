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
        return view('index');
    }

    public function submitAnswers(Request $request)
    {

        // Verifica se il cookie guest_token è presente
        if ($request->hasCookie('guest_token')) {
            // dd('Cookie guest_token presente: ' . $request->cookie('guest_token'));
            return redirect()->route('index')->withErrors(['error' => 'Non puoi rifare il questionario prima che il cookie scada.']);
        }

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
        $createdAt = now();

        Result::create([
            'text_data' => json_encode($answersData),
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
        ]);

        // dd('Impostazione cookie guest_token: ' . $createdAt->timestamp, 'Profilo: ' . $profile);

        // Imposta il cookie guest_token con il valore created_at
        return redirect()->route('result')
        ->cookie('guest_token', $createdAt->timestamp, 1) // 1 minuto
        ->cookie('profile', $profile, 1); // 1 minuto
    }

    public function result(Request $request)
    {
        // Ottiene il profilo del risultato dal cookie
        $profile = $request->cookie('profile');

        return view('result', compact('profile'));
    }
}
