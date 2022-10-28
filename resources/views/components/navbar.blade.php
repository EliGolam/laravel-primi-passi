@php
    $pages = [
        "Home" => "/",
        "Contacts" => "/contacts"
    ]
@endphp

<nav>
    <ul>
        @foreach ($pages as $pageName => $pageLink)
            <li><a href="{{ $pageLink }}">{{ $pageName }}</a></li>
        @endforeach
    </ul>
</nav>
