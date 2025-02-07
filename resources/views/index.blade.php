<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @vite('resources/css/app.css')
    <title>Che afrodisiaco sei?</title>
</head>
<body>
    <header class="bg-white drop-shadow-xl">
        <div id="top-bar" class="min-h-2 bg-red-800"></div>
        <div class="flex justify-around items-center py-3">
            <div class="ms-8">
                <h1 id="title" class="text-red-800">Che afrodisiaco sei?</h1>
                <h3 class="text-gray-800">a cura di Sara Padovano, Psicologa - Psicoterapeuta - Sessuologa</h3>
                <p class="bold-line" style=""><a href="https://www.sarapadovano.com/" target="_blank">www.sarapadovano.com</a></p>
            </div>
            <img src="{{ asset('images/hot-pepper.jpg') }}" alt="img-peperoncino" style="width: 100px;">
        </div>
    </header>

    <main class="pb-12 bg-gray-100">
        @if ($errors->any())
            <div class="alert alert-danger bg-red-200 text-center text-red-800 p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="px-4 pt-12" action="{{ route('submitAnswers') }}" method="POST">
            @csrf
            @foreach($questions as $question)
                <div class="mx-auto max-w-2xl p-6 rounded-xl bg-white mb-8 drop-shadow-xl">
                    <p class="bold-line">{{ $question->question }}</p>
                    @foreach($question->answers as $answer)
                        <label class="block">
                            <input type="radio" name="{{ $question->id }}" value="{{ $answer->id }}"> {{ $answer->answer }}
                        </label>
                    @endforeach
                </div>
            @endforeach
            <div class="mx-auto w-fit pt-4">
                <button type="submit" class="bg-red-700 rounded-xl text-white px-8 shadow-xl py-2 font-bold">INVIA</button>
            </div>
        </form>

    </main>
    <footer class="text-white py-6 flex justify-around items-center">
        <small><strong>© 2019 Sara Padovano | P.IVA 02092430996</strong></small>
        <div class="flex">
            <a href="https://www.facebook.com/people/Sara-Padovano-Psicoterapeuta/100063558729475/" target="_blank" class="me-4">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                </svg>
            </a>
            <a href="https://www.instagram.com/sarapadovanopsicoterapeuta/" target="_blank">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
              </svg>
            </a>
        </div>
    </footer>
</body>
</html>