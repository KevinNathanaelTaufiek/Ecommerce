@extends('template.user')

@section('title')
    Profile
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->

    <div class="row justify-content-center">
        <div class="col-md-4">
            <img class="img-profile" src="https://static.wikia.nocookie.net/mrbean/images/4/4b/Mr_beans_holiday_ver2.jpg" alt="no-image">
        </div>
        <div class="offset-md-2 col-md-6">
            <div class="content">
                <!-- Data User -->
                <label for="">Name</label>
                <p>{{Auth::user()->name}}</p>
                <label for="">Email</label>
                <p>{{Auth::user()->email}}</p>
                <label for="">Address</label>
                <p>{{Auth::user()->address}}</p>
                <label for="">Phone</label>
                <p>{{Auth::user()->phone}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
