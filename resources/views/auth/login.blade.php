<!DOCTYPE html>
<html>
<head>
	<title>Login ET register</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="{{ route('register') }}">
                    @csrf
					<label for="chk" aria-hidden="true">Sign up</label>
					<input class="@error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="User name" required="">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <input  class="@error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required="">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <input type="password" name="password" class=" @error('password') is-invalid @enderror" placeholder="Password" required="">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" name="password_confirmation" placeholder="password_confirmation" required="">
          
                    <button type="submit" >Sign up</button>
				</form>
			</div>

			<div class="login">
                <form  method="POST" action="{{ route('login') }}">
                    @csrf
               
					<label for="chk" aria-hidden="true">Login</label>
					<input class="@error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" required="">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <input class=" @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required="">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <button type="submit" >Login</button>
				</form>
                     
                @if (Route::has('password.request'))
                <a style="color:rgb(100, 99, 102)" class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
			</div>
	</div>
</body>
</html>





{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/stylelogin.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css”/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="{{ route('login') }}">
                    @csrf
               
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input  name="email" type="text" class="login__input @error('email') is-invalid @enderror" placeholder="User name / Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input name="password" type="password" class="login__input @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <button type="submit" class="button login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                
                @if (Route::has('password.request'))
                <a style="color:rgb(45, 10, 78)" class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            
                <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon bi bi-instagram"></a>
                        <a href="#" class="social-login__icon bi bi-facebook"></a>
                        <a href="#" class="social-login__icon bi bi-google"></a>
                    </div>
                    <a style="font-weight: bold;
                    color: #631ee9;
                    font-synthesis-weight: auto;
                    text-decoration: underline;
                " href="{{ route('register') }}"> Create a compte</a>
                </div>
                
            </div>
            
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
          
            </div>	
            	
        </div>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html> --}}




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

