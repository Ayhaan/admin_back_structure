@extends('layouts.index')

@section('content')
    <main class="flex">
        @include('components.nav')
        <div class="ml-5">
            <h1 class="text-2xl py-8">Admin BLOG</h1>
            @include('components.table-blog')
        </div>


    </main>
@endsection