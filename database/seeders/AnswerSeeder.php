<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $answers = [
            1 => ['a) Risposta lorem', 'b) Risposta ipsum', 'c) Risposta dolor'],
            2 => ['a) Risposta lorem', 'b) Risposta ipsum', 'c) Risposta dolor'],
            3 => ['a) Risposta lorem', 'b) Risposta ipsum', 'c) Risposta dolor'],
            4 => ['a) Risposta lorem', 'b) Risposta ipsum', 'c) Risposta dolor'],
            // 5 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 6 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 7 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 8 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 9 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 10 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 11 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 12 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 13 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
            // 14 => ['a) Risposta A', 'b) Risposta B', 'c) Risposta C'],
        ];

        foreach ($answers as $questionId => $answersArray) {
            foreach ($answersArray as $answer) {
                Answer::create([
                    'question_id' => $questionId,
                    'answer' => $answer,
                ]);
            }
        }
    }
}