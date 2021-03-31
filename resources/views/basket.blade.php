@extends('master')
@section('title', 'Корзина')
@section('content')
    <div class="starter-template">
        <p class="alert alert-success">Добавлен товар iPhone X 64GB</p>
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td>
                            <a href="{{route('product', [$product->category->code, $product->code])}}">
                                <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
                                {{$product->name}}
                            </a>
                        </td>
                        <td><span class="badge">1</span>
                            <div class="btn-group form-inline">
                                <form action="http://internet-shop.tmweb.ru/basket/remove/1" method="POST">
                                    <button type="submit" class="btn btn-danger" href=""><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    <input type="hidden" name="_token" value="QbHrVQG1ocarZF2K7TCtr6c4mqvkqmw7KoNkaa3T">
                                </form>
                                <form action="{{route('basket-add', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-success"
                                            href=""><span
                                            class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td>{{$product->price}} ₽</td>
                        <td>{{$product->price}} ₽</td>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>71990 ₽</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="http://internet-shop.tmweb.ru/basket/place">Оформить заказ</a>
            </div>
        </div>
    </div>



@endsection
