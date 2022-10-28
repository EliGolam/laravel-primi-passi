@extends('mainLayout')

@section('content')
    @php
        $pageName = "Home";
    @endphp

    <main>
        <h2>This is our {{ $pageName }}</h2>
    </main>
@endsection

