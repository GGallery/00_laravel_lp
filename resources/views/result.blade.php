@extends('layouts.app')

@section('title', 'Che afrodisiaco sei? - Risultato')

@section('main-content')

    {{-- <main class="pt-12 bg-gray-100"> --}}
    <div class="pt-12 bg-gray-100">

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

        <div class="bg-gray-300 text-center py-12 mt-14" id="bottom-banner">
            <h3 class="h3-line">Grazie per aver completato il questionario.</h3>
            <h3 class="h3-line">Visita il mio sito: <a href="https://www.sarapadovano.com/" class="text-red-800">www.sarapadovano.com</a></h3>
        </div>
        
    {{-- </main> --}}
    </div>

@endsection
