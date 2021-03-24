<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет магазин: @yield('title')</title>

    <script type="text/javascript" nonce="ab2fdd1786be4c05aecaec0542b" src="//local.adguard.org?ts=1616509836093&amp;type=content-script&amp;dmn=internet-shop.tmweb.ru&amp;app=com.apple.Safari&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1&amp;sbe=0"></script>
    <script type="text/javascript" nonce="ab2fdd1786be4c05aecaec0542b" src="//local.adguard.org?ts=1616509836093&amp;name=AdGuard%20Extra&amp;type=user-script"></script><link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('index')}}">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="{{route('index')}}">Все товары</a></li>
                <li class="active"><a href="{{route('categories')}}">Категории</a>
                </li>
                <li ><a href="{{route('basket')}}">В корзину</a></li>
                <li><a href="{{route('index')}}">Сбросить проект в начальное состояние</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

{{--                <li class="dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>--}}
{{--                        <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>--}}
{{--                        <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>

{{--            <ul class="nav navbar-nav navbar-right">--}}
{{--                <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>--}}

{{--            </ul>--}}
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
