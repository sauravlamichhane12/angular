<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bf2d190e3d.js" crossorigin="anonymous"></script>
    <script src="https://js.hcaptcha.com/1/api.js"></script>
</head>
<body>

<form method="POST" action="{{ route('register') }}">
                        @csrf
    <div class="Register-form">
     
      <div class="form-title">
        Registration
      </div>
      <div class="form-input">
        <label for="username">Username</label>
        <input type="text" id="username" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        <br>
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-input">
        <label for="email">Email</label>
        <input type="email" id="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        <br>
        @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="form-input">
        <label for="password">Password</label>
        <input type="password" id="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <br>
        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
      </div>
      <div class="form-input">
        <label for="password">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
      
      <div class="form-group">
        <label for="captcha">Captcha</label>
          {!! NoCaptcha::renderJs() !!}
          {!! NoCaptcha::display() !!}
          @error('g-recaptcha-response')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
      </div>
 
      <div class="form-input">
        <button id="login-btn" type="submit">Registration</button>
        <br>
        <a href="{{ url('/customer/login') }}"><button type="button" class="btn btn-primary" style="width:100%">Login</button></a>

      </div>
      <div class="link-to-register">
     
      </div>
    
      </form>
   
   
</body>
</html>

