@extends('template')

@section('content')
    @php
        $pageName = "Home";
    @endphp

    <main>
        <h2 class="subtitle">This is our {{ $pageName }}</h2>
    </main>
@endsection

