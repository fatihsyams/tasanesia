<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- my css -->
    <link rel="stylesheet" href="login.css">
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<title>login</title>
  </head>
  <body>
    <div class="main">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
              <h1 class="logo">Tasanesia</h1>
            </div>
        </nav>
        <div class="content">
            <div class="container ">
                <div class="card" style="width: 23rem;">
                  <div class="card-title">
                    <a class="btn" href="/" style="" type="close"><i class="far fa-times-circle"></i></a>
                  </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                            <div class="col-md-12">
                                <h4 class="text1">Sign In</h4>
                            </div>
                            <div class="col1">
                                <p class="text2">New user? <a href="/register" style="border: none; color: #28a745;">Create an account</a> </p>
                            </div>
                        </div>
                          <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus required>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>
                          <div class="mb-3" style="margin-top: -17px !important;">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <label for="email" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        <label>
                          <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>  {{ __('Remember Me') }}
                        </label>
                        @if (Route::has('password.request'))
                                    <a class="p-text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        <button type="submit" class="btn btn-primary" style=" color: white; background-color: #28a745; font-size: 15px; width: 100%;">{{ __('Login') }}</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
  </body>
