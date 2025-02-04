# Progetto Laravel - Quiz con Profili

## Struttura ad albero dei file

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
```

## Controllers

### QuestionController
#### index()
- Recupera tutte le domande con le relative risposte dal database.
- Ritorna la vista `index` con le domande e gli passa con `compact` la variabile `$questions`.

### GuestController
#### index(Request $request)
- Controlla se il cookie `guest_token` esiste.
- Se il cookie non esiste, genera un token casuale di 40 caratteri.
- Imposta il token come cookie con una durata di 1 minuto.
- <b>Ritorna la vista `index`.</b>

#### submitAnswers(Request $request)
- Prende le risposte escludendo il token CSRF.
- Inizializza i contatori per le risposte A, B e C.
- Trova le risposte nel database e incrementa i contatori appropriati.
- Determina il profilo basato sulla risposta con il maggior numero di voti.
- Genera un nuovo token casuale di 40 caratteri.
- Imposta i cookie `guest_token` e `profile` con una durata di 1 minuto.
- <b>Reindirizza alla rotta `result`.</b>

#### result(Request $request)
- Ottiene il profilo del risultato dal cookie.
- <b>Ritorna la vista `result` con la variabile per il profilo (es. cioccolato, vaniglia, ...).</b>

