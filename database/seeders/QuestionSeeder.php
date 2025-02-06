<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $questions = [
            'Domanda 1',
            'Domanda 2',
            'Domanda 3',
            'Domanda 4',
            // 'Domanda 5',
            // 'Domanda 6',
            // 'Domanda 7',
            // 'Domanda 8',
            // 'Domanda 9',
            // 'Domanda 10',
            // 'Domanda 11',
            // 'Domanda 12',
            // 'Domanda 13',
            // 'Domanda 14',
        ];

        foreach ($questions as $question) {
            Question::create(['question' => $question]);
        }

    }
}