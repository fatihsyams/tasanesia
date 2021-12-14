<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- my css -->
    <link rel="stylesheet" href="register.css">
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <title>Register</title>
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
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                            <div class="col-md-12">
                                <h4 class="text1">Create An Account</h4>
                            </div>
                            <div class="col1">
                                <p class="text2">Already an user? <a href="/login" style="border: none; color: #28a745;">Sign in</a> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div  style="margin-top: -17px !important;">
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>
                            </div>
                        <!-- </div>
                            <div class="col-md-6"  style="margin-top: -17px !important;">
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label"></label>
                                    <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                                  </div>
                            </div>
                        </div> -->
                        
                        <div class="mb-1" style="margin-top: -17px !important;">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="mb-1" style="margin-top: -17px !important;">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                          <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Phone number" required autocomplete="no_hp">
                          @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-1" style="margin-top: -17px !important;">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3" style="margin-top: -17px !important;">
                          <label for="exampleFormControlInput1" class="form-label"></label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn" href="home-page.html" style=" color: white; background-color: #28a745; font-size: 15px; width: 100%;">{{ __('Register') }}</button>
                      </div>
                    </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</body>
</html>
