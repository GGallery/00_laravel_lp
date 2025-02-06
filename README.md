## Struttura ad albero dei file principali

```
database
└ migrations
  ├ create_questions_table
  ├ create_answers_table
└ seeders
  ├ AnswerSeeder.php
  ├ QuestionSeeder.php

resources
└ views
  ├ index.blade.php
  ├ result.blade.php

app/Http/Controllers
└ GuestController.php
└ QuestionController.php

app/Models
└ Answer.php
└ Guest.php
└ Profile.php
└ Question.php
└ Result.php

config
└ profiles.php
```

## Controllers

### QuestionController
#### index()
- Recupera tutte le domande con le relative risposte dal database.
- Ritorna la vista `index` con le domande e gli passa con `compact` la variabile `$questions`.

### GuestController
#### index(Request $request)
- Ritorna la vista `index`.

#### submitAnswers(Request $request)
- Verifica se il cookie `guest_token` è presente.
- Prende le risposte escludendo il token CSRF.
- Inizializza i contatori per le risposte A, B e C.
- Trova le risposte nel database e incrementa i contatori appropriati.
- Determina il profilo basato sulla risposta con il maggior numero di voti.
- Recupera la descrizione del profilo dal modello `Profile`.
- Recupera il timestamp corrente dal database per garantire la coerenza tra PHP e MySQL.
- Converte il timestamp in formato Unix.
- Salva il risultato nel database con il timestamp `created_at`.
- Imposta i cookie `guest_token` e `profile` con una durata di 1 minuto.
- <b>Reindirizza alla rotta `result`.</b>

#### result(Request $request)
- Ottiene il profilo del risultato dal cookie.
- Recupera il risultato dal database usando il cookie `guest_token`.
- Decodifica il JSON per ottenere la descrizione.
- <b>Ritorna la vista `result` con le variabili per il profilo e la descrizione.</b>

## Models

### Result
#### findByGuestToken($guestToken)
- Metodo statico per trovare un record utilizzando il `guest_token`.
- Converte il timestamp Unix in una stringa di data e ora.
- Esegue una query per trovare il record con il campo `created_at` corrispondente.