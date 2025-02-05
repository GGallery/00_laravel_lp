<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header class="bg-red-800 text-white p-4 flex justify-between items-center">
        <h1 class="text-3xl font-bold">header</h1>
    </header>

    <main class="p-4">
        @if ($errors->any())
            <div class="alert alert-danger bg-red-200 text-red-800 p-4 mb-4">
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

        <h2 class="text-2xl font-bold">Questionario</h2>
        <form action="{{ route('submitAnswers') }}" method="POST">
            @csrf
            @foreach($questions as $question)
                <div class="mb-4">

                    
                    <p class="font-bold">{{ $question->question }}</p>
                    @foreach($question->answers as $answer)
                        <label class="block">
                            <input type="radio" name="{{ $question->id }}" value="{{ $answer->id }}"> {{ $answer->answer }}
                        </label>
                    @endforeach
                </div>
            @endforeach
            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Invia</button>
        </form>


    </main>
    <footer class="bg-gray-300 text-gray-700 p-4 flex justify-center items-center">
        <p>footer</p>
    </footer>
</body>
</html>