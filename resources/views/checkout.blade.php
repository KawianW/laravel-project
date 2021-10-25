<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/cart.css') }}">

    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <title>Checkout Page</title>
</head>
<body>
<nav class="navbar">
    <hr>
</nav>

@if (Session::has('cart'))
    <div class="row">
        <div class="col-75">
            <div class="container">
                <div class="panel-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                            @endif
                        </div>
                        <form action="{{ route('postShoppingCart') }}"
                              method="POST" id="checkout-form">
                           @csrf
                            <div class="row">
                                <div class="col-50">
                                    <h3>Billing Address</h3>
                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                    <input type="text" id="fname" name="name" placeholder="Your name" required>
                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                    <input type="text" id="email" name="email" placeholder="example@gmail.com"
                                           required>
                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                    <input type="text" id="adr" name="address" placeholder="Adress" required>
                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                    <input type="text" id="city" name="city" placeholder="City" required>

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="state">State</label>
                                            <input type="text" id="state" name="state" placeholder="State"
                                                   required>
                                        </div>
                                        <div class="col-50">
                                            <label for="zip">Zip</label>
                                            <input type="text" id="zip" name="zip" placeholder="Zip-code" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <h3>Payment</h3>
                                    <label for="fname">Accepted Cards</label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                    </div>

                                    <label for="cname">Name on Card</label>
                                    <input type="text" id="cname" name="cardname" placeholder="Bob Bobberson"
                                           required>
                                    <label for="ccnum">Credit card number</label>
                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"
                                           required>
                                    <label for="expmonth">Exp Month</label>
                                    <input type="text" id="expmonth" name="expmonth" placeholder="May" required>
                                    <div class="row">
                                        <div class="col-50">
                                            <label for="expyear">Exp Year</label>
                                            <input type="text" id="expyear" name="expyear" placeholder="03/2023"
                                                   required>
                                        </div>
                                        <div class="col-50">
                                            <label for="cvv">CVV</label>
                                            <input type="text" id="cvv" name="cvv" placeholder="123" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Continue to checkout" class="btn">
                        </form>
                </div>
            </div>

            <div class="col-25">
                <div class="container">
                    <h4>Cart</h4>
                    <hr>
                    <p>Total <span class="price" style="color:black">
                        <b>€{{ $total }}</b>
                    </span>
                    </p>

                </div>
            </div>
        </div>

        @else
            <div class="container"><h1>There are no items in your cart!</h1></div>
        @endif
</body>