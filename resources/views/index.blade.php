@extends('layouts.app')

@section('title', 'Che afrodisiaco sei?')

@section('main-content')

    {{-- <main class="pb-12 bg-gray-100"> --}}
    <div class="pb-12 bg-gray-100">
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
                            <input type="radio" name="{{ $question->id }}" value="{{ $answer->id }}" {{ old($question->id) == $answer->id ? 'checked' : '' }}> {{ $answer->answer }}
                        </label>
                    @endforeach
                </div>
            @endforeach
            <div class="mx-auto w-fit pt-4" style="min-height: 130px">
                <button type="submit" class="bg-red-700 hover:bg-red-900 rounded-xl text-white px-8 shadow-xl py-2 font-bold">INVIA</button>
            </div>
        </form>
    </div>

    {{-- </main> --}}
@endsection
