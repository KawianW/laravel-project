@extends('layouts.app')

@section('title')
    laravel shopping cart
@endsection

@section('content')
    <div class="row" style="justify-content: center">
        <div class="card" style="width: 18rem; margin-right: 1rem">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">boek 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <div class="price_addCart">
                    <div class="price">&dollar;12</div>
                    <a href="#" class="btn btn-primary" style="float:right">Add to card-text</a>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin-right: 1rem">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">boek 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <div class="price_addCart">
                    <div class="price">&dollar;12</div>
                    <a href="#" class="btn btn-primary" style="float:right">Add to card-text</a>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">boek 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <div class="price_addCart">
                    <div class="price">&dollar;12</div>
                    <a href="#" class="btn btn-primary" style="float:right">Add to card-text</a>
                </div>
            </div>
        </div>
    </div>
{{-- nieuwe row ------------------------------------------------------------------------- --}}
    <div class="row" style="justify-content: center">
        <div class="card" style="width: 18rem; margin-right: 1rem">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">boek 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <div class="price_addCart">
                    <div class="price">&dollar;12</div>
                    <a href="#" class="btn btn-primary" style="float:right">Add to card-text</a>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin-right: 1rem">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">boek 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <div class="price_addCart">
                    <div class="price">&dollar;12</div>
                    <a href="#" class="btn btn-primary" style="float:right">Add to card-text</a>
                </div>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">boek 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <div class="price_addCart">
                    <div class="price">&dollar;12</div>
                    <a href="#" class="btn btn-primary" style="float:right">Add to card-text</a>
                </div>
            </div>
        </div>
    </div>
@endsection
