<!DOCTYPE html>
<html lang="en">
<!-- METADATA -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--#region FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">



    <!-- My CSS -->
    {{-- <link rel="stylesheet" href="./stylesheets/css-reset.css" type="text/css" />
    <link rel="stylesheet" href="./stylesheets/style.css" type="text/css" />

    <!-- My Scripts -->
    <script src="./scripts/script.js" type="text/javascript" defer></script> --}}
    <!--#endregion Stylesheets and Scripts -->

    <!--#region META -->
    <meta name="searchtitle" content="Boolean">
    <meta name="keywords" content="Boolean, Programming, Coding">
    <meta name="description" content="Learn, Practice, Improve - with Boolean Careers">
    <!--#endregion META -->


    <title>Laravel Practice | by Elias Mahfuzul</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>

<!-- BODY -->
<body>

    <header class="container">
        <h1 class="title">First Steps in Laravel</h1>
        <p class="subtitle">by Elias Mahfuzul</p>

        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contacts">Contacts</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

</body>
</html>
