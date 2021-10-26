@extends('layouts.app')

@section('title')
    laravel shopping cart
@endsection

@section('content')
    @if (Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    @foreach ($products as $product)
        <div class="card" style="width: 18rem; margin: 0.5rem">
            <img class="card-img-top" src='{{ $product->imagePath }}' alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">€{{ $product->price }}-,</p>
                <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-primary" style="float:right">Add to cart</a>
            </div>
        </div>
    @endforeach
    <form action="{{ route('categories') }}" method="POST">
        @csrf
        <div class="custom-select" style="width:200px;">
            <select name="categories">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
