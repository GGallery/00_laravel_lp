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
    <title>Document</title>
</head>
<body>
    {{-- <header class="bg-red-800 text-white p-2"> --}}
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
    <footer class="bg-gray-300 text-gray-700 py-6 flex justify-center items-center">
        {{-- <p>footer</p> --}}
    </footer>
</body>
</html>