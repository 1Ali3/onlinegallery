<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href = "fonts/Manrope/stylesheet.css" rel = "stylesheet" type = "text/css" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">

        <!-- Styles -->
        <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}">-->        
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">       

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body>
        <!-- Page Heading -->
        <header>
            <div id="logo">
                <a href="/"><img src="img/log.png" width="160" height="80" alt="На главную" title="На главную"></a>
            </div>

            <div id="menuHead">
                <a href="about.php"><div style="margin-right: 3%">О нас</div></a>
                <a href="feedback.php"><div style="margin-right: 3%, font-family: Manrope;">Обратная связь</div></a>
            </div>
        </header>
        <img src="img/ban3.jpg" width="1300" height="100" ></a>
    <div id="im">
        <a href="index.php"><img src="img/log.png" width="90" height="45" alt="На главную" title="На главную"></a>  
    </div>	

    <div id="wrapper">

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <div id="rightCol">
            <div class="banner">
                <img src="img/banner_1.jpg" alt="Реклама" title="Реклама">
            </div>
            <div class="banner">
                <img src="img/banner_2.jpg" alt="Реклама" title="Реклама">
            </div>
        </div>
    </div>
</body>
</html>
