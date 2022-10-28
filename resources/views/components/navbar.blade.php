@php
    $pages = [
        "Home" => "/",
        "Contacts" => "/contacts"
    ]
@endphp

<nav class="main-nav">
    <ul class="nav-list">
        @foreach ($pages as $pageName => $pageLink)
            <li><a class="nav-link" href="{{ $pageLink }}">{{ $pageName }}</a></li>
        @endforeach
    </ul>
</nav>
