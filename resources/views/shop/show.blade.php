@extends('template.user')

@section('title')
  My Ecommerce
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/show.css')}}">
@endsection

@section('content')
<div class="container">
  <h2 class="title">{{$product->name}}</h2>
  <hr>
  <div class="row">
    <div class="wrapper">
      <div class="col-lg-4" id="picture">
      <img src="{{asset($product->image)}}" alt="" height="200" width="200">
      </div>
    </div>
    <div class="col-lg-4 desc">
      <h4 id="description">Description</h4>
      <p>{{$product->desc}}</p>
    </div>
    <div class="col-lg-4">
      <div class="kartu">
        <p>Harga</p>
        <h2>Rp{{number_format($product->price)}}</h2>
        <form action="/cart/store" method="POST">
        @csrf
        <input type="hidden" value="{{$product->id}}" name="product_id">
        <input type="submit" class="btn btn-primary" value="Add to Cart">
    </form>
      </div>
    </div>
  </div>
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
    <p>CodingStudio &copy; 2020</p>
  </div>

</footer>
@endsection

@section('script')
   <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection
