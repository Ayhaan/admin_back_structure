@extends('layouts.index')

@section('content')
    <h1 class="text-center py-20">Ici se trouve votre template</h1>
    <div class="flex justify-center">
        <a href="{{ route('dashboard') }}" class="bg-blue-500 rounded-full font-bold text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
            Go administration
        </a>

    </div>
@endsection