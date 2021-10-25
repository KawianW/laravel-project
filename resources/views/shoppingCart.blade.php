@extends('layouts.app')

@section('title')
    laravel shopping cart
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row" style="justify-content: center">
            <div class="col-sm-6 cl-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{$product['qty']}}</span>
                            <strong>{{$product['item'] ['title']}}</strong>
                            <span class="label label-succes">{{$product['price']}}</span>
                            <td>
                                <a class="dropdown-item"
                                       href="{{ route('reduceByOne', ['id'=> $product['item']['id']]) }}">Reduce by 1</a>
                                <a class="dropdown-item"
                                       href="{{ route('addByOne', ['id'=> $product['item']['id']]) }}">Add by 1</a>
                                <a class="dropdown-item"
                                       href="{{ route('remove', ['id'=> $product['item']['id']]) }}">Reduce all</a>
                            </td>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 cl-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 cl-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('getShoppingCart')}}" type="button" class="btn btn-succes">Checkout</a>
            </div>
        </div>

        @else

        <div class="row">
            <div class="col-sm-6 cl-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No items in Cart</h2>
            </div>
        </div>
        @endif
@endsection