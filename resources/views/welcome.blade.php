<!DOCTYPE html>
<html>

<head>
	<title>My E-Commerce</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap-4.1.3/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
    @guest
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="/">My E-Commerce</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link underline" href="/">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link underline" href="">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link underline" href="/shop">Our Product</a>
				</li>
				<li class="nav-item">
					<a class="nav-link button" href="/login">Sign In</a>
                </li>
			</ul>
		</div>
    </nav>
    @else
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">My E-Commerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link underline" href="/shop"><i class="fa fa-shopping-cart"></i> Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline" href="/cart"><i class="fa fa-shopping-cart"></i> Cart</a>
                    </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/home">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        </li>
                </ul>
            </div>
        </nav>
        @endguest
	<div class="content">
		<h1 class="title">E - Commerce</h1>
		<h3>The Best Place for Any Solutions</h3>
	</div>
	<div class="container">
        <div class="products">
            <h1 id="featured">Featured Products</h1>
            <div class="row list-product">
		@foreach ($products as $product)
                <div class="col-lg-4 col-md-6">
                    <a href="">
                        <img src="{{asset($product->image)}}" alt="nopic" height="150" width="150">
                    </a>
                    <p class="product-name"><a href="#">{{$product->name}}</a></p>
                    <p class="product-price">Rp. {{number_format($product->price)}}</p>
                </div>
                @endforeach
            </div>
        </div>
		<a href="/shop" class="more">View More Products ></a>
	</div>

	<footer class="footer-distributed">
		<div class="footer-right">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-gitlab"></i></a>
		</div>
		<div class="footer-left">
			<p class="footer-links">
				<a class="link-1" href="#">HOME</a>
				<a href="#">SHOP</a>
				<a href="#">ABOUT</a>
				<a href="#">FAQ</a>
			</p>
			<p>CodingStudio &copy; 2018</p>
		</div>

    </footer>
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('bootstrap-4.1.3/dist/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>

</html>
