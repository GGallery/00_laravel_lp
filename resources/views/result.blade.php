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

            <div class="card bg-gray-200 p-4 max-w-3xl mx-auto">

                @if($profile == 'PROFILO CIOCCOLATO')
                    <div class="wrapper-content">
                        <h2 class="font-bold text-lg" style="color: rgb(83, 43, 41)">PROFILO CIOCCOLATO (maggioranza di A)</h2>
                        <p>{!! $description !!}</p>
                    </div>

                @elseif($profile == 'PROFILO VANIGLIA')
                    <div class="wrapper-content">
                        <h2 class="font-bold text-lg" style="color: rgb(204, 183, 91)">PROFILO VANIGLIA (maggioranza di B)</h2>
                        <p>{!! $description !!}</p>
                    </div>
                
                @elseif($profile == 'PROFILO PEPERONCINO')
                    <div class="wrapper-content">
                        <h2 class="font-bold text-lg" style="color: red">PROFILO PEPERONCINO (maggioranza di C)</h2>
                        <p>{!! $description !!}</p>
                    </div>
                @endif

            </div>
            
    </main>


    <footer class="bg-gray-300 text-gray-700 p-4 flex justify-center items-center">
        <p>footer</p>
    </footer>
</body>
</html>