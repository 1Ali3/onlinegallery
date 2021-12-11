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
                <a href="/"><img src="/img/log.png" width="160" height="80" alt="На главную" title="На главную"></a>
            </div>

            <div id="menuHead">
                <a href="/about"><div style="margin-right: 3%;font-family: Manrope;">О нас</div></a>
                <a href="/feedback"><div style="margin-right: 3%; font-family: Manrope;">Обратная связь</div></a>
                @if(Auth::check())
                <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button style="background-color: transparent;-webkit-appearance: none;border: 0;color: #B7B7B7;" type="submit">Выйти</button>
                   
                </form>
                </div>
                @else
                <a href="/login"><div style="margin-right: 3%; font-family: Manrope;">Вход</div></a>
                @endif
            </div>
        </header>
        @if(isset($banner))
        {{ $banner }}
        @endif
        <div id="im">
            <a href="index.php"><img src="/img/log.png" width="90" height="45" alt="На главную" title="На главную"></a>  
        </div>	

        <div id="wrapper">
            <div id="leftCol">
                <!-- Page Content -->

                {{ $slot }}
            </div>
            <div id="rightCol">
                <div class="banner">
                    <img src="/img/banner_1.jpg" alt="Реклама" title="Реклама">
                </div>
                <div class="banner">
                    <img src="/img/banner_2.jpg" alt="Реклама" title="Реклама">
                </div>
            </div>
        </div>

    </body>
    <footer>
        <div id="social">
            <a href="http:/instagram.com" title="Инстаграмм" target="_blank">
                <img src="/img/inst.png" alt="Инст" title="Инст">
            </a>
            <a href="http:/pinterest.com" title="Пинтерест" target="_blank">
                <img src="/img/pin.png" alt="Пин" title="Пин">
            </a>
        </div>
        <div id="rights">
            Все права защищены &copy; <?php echo date('Y') ?>
        </div>
    </footer>
</html>
