@extends('template.user')

@section('title')
    Cart
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
@endsection

@section('content')
<div class="container">
    @if ($items->count() == 0)
        <p style="text-align:center;" class="alert alert-danger mb-5">Your Cart is Empty</p>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
    @endif

    @php
        $total=0;
    @endphp
<div>
    <h3>{{count($items)}} Item in your cart</h3>
</div>

<div class="cart">
            @foreach ($items as $item)
            <div class="row mb-5">
                <div class="col-lg-3">
                <img class="img-cart" src="{{asset('storage/images/product.jpg')}}" alt="">
                </div>
                <div class="col-lg-9">
                    <div class="top">
                        <p class="item-name">{{$item->product->name}}</p>
                        <div class="top-right">
                            <p class="">Rp. {{number_format($item->product->price)}}</p>
                            <select name="qty" class="quantity" data-item="{{$item->id}}">
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{$i}}" {{$item->qty == $i ? 'selected':''}}>{{$i}}</option>
                            @endfor
                            </select>
                            <!-- Subtotal -->
                            <p class="total-item">Rp{{number_format($item->product->price * $item->qty)}}</p>
                        </div>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="bottom">
                       <div class="row">
                            <p class="col-lg-6 item-desc">
                                {{$item->product->desc}}
                            </p>
                            <div class="offset-lg-4">

                            </div>
                            <div class="col-lg-2">
                            <!-- delete cart -->
                            <form action="" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
            @php
                $total += ($item->product->price * $item->qty);
            @endphp
            @endforeach
    </div>
    {{-- @php
    $total += ($cart->item->price * $cart->quantity);
    @endphp --}}
<div class="totalz">
    <h4 class="total-price">Total Price: Rp{{number_format($total)}}</h4>
</div>
</div>

<form action="/checkout" method="POST" style="margin-left: 700px;">
@csrf
<button type="submit" class="btn btn-primary">Checkout</button>
</form>
    {{-- @endif --}}
@endsection

@section('script')
<script type="text/javascript">
    (function(){
    const classname = document.querySelectorAll('.quantity');

    Array.from(classname).forEach(function(element){
     element.addEventListener('change', function(){
        const id = element.getAttribute('data-item');
        axios.patch(`/cart/${id}`, {
            quantity: this.value,
            id: id
          })
          .then(function (response) {
            // console.log(response);
            window.location.href = '/cart'
          })
          .catch(function (error) {
            console.log(error);
          });
   })
 })
    })();
</script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection
