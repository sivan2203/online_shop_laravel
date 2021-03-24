@extends('master')
@section('title', 'Товар')
@section('content')
    <div class="starter-template">
        <h1>Ipnohe XR 64</h1>
        <h2>{{$product}}</h2>
        <h2>Мобильные телефоны</h2>
        <p>Цена: <b>71990 ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>Отличный продвинутый телефон с памятью на 64 gb</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="Gefc7YGBmO5XcmYk45IFoJFAc7knXFJpBqmxvtqo">        </form>
    </div>
@endsection

