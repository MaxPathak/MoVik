<!DOCTYPE html>
<html lang="en" class="theme-light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoVik</title>
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Fonts --}}
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.themeButton').click(function() {
                var html = document.documentElement;
                $(html).toggleClass('theme-light');
                $(html).toggleClass('theme-dark');
            });
        });

    </script>
</head>

<body>

    <header class="header"><a class="logo" href="\home">
            <span class="title">MoVik</span>
            <span class="tagline">Your Food is On the Way</span>
        </a></header>

    @include('includes.navbar')

    @yield('content')

    @include('includes.sidebar')

    <button class="themeButton">Theme</button>

</body>

</html>
