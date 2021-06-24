<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
  </head>
  <body>
    <div class="container">
      <div class="login-wrapper">
        <h1 class="title">Register</h1>
        <hr>
        <form method="POST" action="{{ route('register') }}" class="login-form">
            @csrf
          <input type="text" class="input" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

          @error('name')
              <span class="invalid-feedback" role="alert">
                  {{ $message }}
              </span>
          @enderror

          <input type="email" class="input" placeholder="E-mail"  name="email" value="{{ old('email') }}" required>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  {{ $message }}
              </span>
          @enderror

          <input type="password" class="input" placeholder="Password" name="password" required>

          @error('password')
              <span class="invalid-feedback" role="alert">
                 {{ $message }}
              </span>
          @enderror

           <input id="password-confirm" placeholder="Confirm Password" type="password" class="input" name="password_confirmation" required>

          <textarea name="address" rows="3" placeholder="Address" rows="3" required></textarea>

          @error('address')
              <span class="invalid-feedback" role="alert">
                  {{ $message }}
              </span>
          @enderror


          <input type="text" class="input" placeholder="Phone Number"  name="phone" required>

          @error('phone')
              <span class="invalid-feedback" role="alert">
                  {{ $message }}
              </span>
          @enderror

          <button type="submit">Register</button>
          <p class="message">Already registered? <a href="/login">Sign In</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
