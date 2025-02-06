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
    <header class="bg-red-800 text-white p-2 flex justify-between items-center">
        {{-- <h1 class="text-3xl font-bold">header</h1> --}}
    </header>

    <main class="p-4">
        @if ($errors->any())
            <div class="alert alert-danger bg-red-200 text-center text-red-800 p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- <div>
            <a href="{{ route('result') }}">
                <input type="button" value="Vai al risultato" class="bg-orange-200 px-4 py-2">
            </a>
        </div> --}}
        <form action="{{ route('submitAnswers') }}" method="POST">
            @csrf
            @foreach($questions as $question)
                <div class="mx-auto max-w-xl p-3 rounded-xl bg-gray-200 mb-4">
                    <p class="font-bold">{{ $question->question }}</p>
                    @foreach($question->answers as $answer)
                        <label class="block">
                            <input type="radio" name="{{ $question->id }}" value="{{ $answer->id }}"> {{ $answer->answer }}
                        </label>
                    @endforeach
                </div>
            @endforeach
            <div class="mx-auto w-fit">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2">Invia</button>
            </div>
        </form>

    </main>
    <footer class="bg-gray-300 text-gray-700 p-2 flex justify-center items-center">
        {{-- <p>footer</p> --}}
    </footer>
</body>
</html>