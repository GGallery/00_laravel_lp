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
            1 => ['a) Inverno: dolci coccole sotto al piumone', 'b) Primavera ed estate: risveglio di profumi e ormoni', 'c) Tutte le stagioni'],
            2 => ['a) Baci appassionati e caldi', 'b) Massaggi "sapienti" con oli profumati', 'c) Un gioco erotico intrigante'],
            3 => ['a) I suo abbracci avvolgenti', 'b) Il suo odore sulla tua pelle', 'c) I suoi genitali'],
            4 => ['a) Con le mani', 'b) Accompagnato da una coppa di Champagne', 'c) Apparecchiato sul corpo del partner'],
            5 => ['a) Letto', 'b) Tavola', 'c) Ovunque'],
            6 => ['a) Toccarlo', 'b) Annusarlo', 'c) Morderlo e Leccarlo'],
            7 => ['a) Fondente', 'b) Vaniglia', 'c) Peperoncino'],
            8 => ['a) Nero come il mistero', 'b) Sfumature dell\'oro', 'c) Rosso come il Fuoco'],
            9 => ['a) Le emozioni vissute con il partner', 'b) L\'esperienza olfattiva di luoghi che ho visitato', 'c) Le esperienze nuove che ho vissuto'],
            10 => ['a) Il mio corpo caldo che sfiora il suo', 'b) L\'odore della mia pelle a cui non resiste', 'c) Il mio tocco "sapiente e mirato" nelle zone hot'],
            11 => ['a) Una cena a lume di candela', 'b) Un bagno tra candele ed essenze profumate', 'c) Un incontro imprevisto che finisce a letto'],
            12 => ['a) Fare sesso non in camera da letto', 'b) Cospargersi di olio profumato e "scivolarsi" addosso', 'c) Ménage a troi'],
            13 => ['a) Il suo Tatto', 'b) Il suo Odore', 'c) Il suo Gusto'],
            14 => ['a) Avvolgente', 'b) Inebriante', 'c) Piccante'],
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