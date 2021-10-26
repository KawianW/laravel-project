<nav class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item pull-right">
        <a class="nav-link pull-right" href="{{route('cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''   }}</span>
      </li>
    </ul>
  </div>
</nav>

{{-- TODO: cart werkt niet? --}}