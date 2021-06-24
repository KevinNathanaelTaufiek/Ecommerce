<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="login-wrapper">
        <h1 class="title">Login</h1>
        <hr>
        <form method="POST" action="{{ route('login') }}" class="login-form">
          @csrf
          <input type="text" placeholder="E-mail" {{ $errors->has('email') ? ' is-invalid' : '' }} name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $errors->first('email') }}</strong>
             </span>
         @endif

          <input type="password" placeholder="Password" {{ $errors->has('password') ? ' is-invalid' : '' }} name="password" required>

          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif

          <button type="submit">Login</button>
          <p class="message">Not registered? <a href="/register">Create an account</a></p>
        </form>
      </div>
    </div>
    <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
