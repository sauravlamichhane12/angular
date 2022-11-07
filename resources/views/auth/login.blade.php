<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
<form method="POST" action="{{ route('login') }}">
                        @csrf
      <div class="login-form">
        <div class="form-title">
          Logins
        </div>
        <div class="form-input">
          <label for="email">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <br>
           @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror    
    </div>
        <div class="form-input">
          <label for="password">Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
       @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
       </span>
         @enderror
        </div>
        <div class="form-input">
          <button id="login-btn">Login</button>
          <br>
          <a href="{{ route('register') }}"><button type="button" class="btn btn-primary" style="width:100%">Register</button></a>
        </div>
        <div class="link-to-register">
      
        </div>
      </div>

    </form>
</body>
</html>

