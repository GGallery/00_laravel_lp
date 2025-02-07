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

    <main class="pt-12 pb-14 bg-gray-100">

        <div class="mx-4">
            <div class="card rounded-xl bg-white p-8 max-w-3xl mx-auto drop-shadow-xl">

                    @if($profile == 'PROFILO CIOCCOLATO')
                        <div class="wrapper-content">
                            <h2 class="bold-line text-2xl mb-6" style="color: rgb(83, 43, 41)">PROFILO CIOCCOLATO (maggioranza di A)</h2>
                            <p>{!! $description !!}</p>
                        </div>

                    @elseif($profile == 'PROFILO VANIGLIA')
                        <div class="wrapper-content">
                            <h2 class="bold-line text-2xl mb-6" style="color: rgb(204, 183, 91)">PROFILO VANIGLIA (maggioranza di B)</h2>
                            <p>{!! $description !!}</p>
                        </div>
                    
                    @elseif($profile == 'PROFILO PEPERONCINO')
                        <div class="wrapper-content">
                            <h2 class="bold-line text-2xl mb-6" style="color: red">PROFILO PEPERONCINO (maggioranza di C)</h2>
                            <p>{!! $description !!}</p>
                        </div>
                    @endif
                
                </div>
            </div>
            
    </main>


    <footer class="bg-gray-300 text-gray-700 py-6 flex justify-center items-center">
        {{-- <p>footer</p> --}}
    </footer>
</body>
</html>