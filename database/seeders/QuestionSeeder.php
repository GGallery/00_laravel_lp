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
            '1. La stagione migliore per l\'amore',
            '2. I preliminari migliori sono',
            '3. Mi eccita di più ricordare...',
            '4. Il dessert si mangia...',
            '5. La seduzione si gioca a...',
            '6. Di un cibo mi stimola l\'appetito',
            '7. Un cioccolatino ripieno di',
            '8. Il colore del sesso',
            '9. Di un viaggio mi rimane più impresso il ricordo',
            '10. Al buio accendo la sua passione con',
            '11. Il miglior preludio d\'amore è',
            '12. Il dettaglio hot di un incontro col partner',
            '13. Di un partner mi stimola "l\'appetito"',
            '14. Il profumo del sesso ha una nota...',
        ];

        foreach ($questions as $question) {
            Question::create(['question' => $question]);
        }

    }
}