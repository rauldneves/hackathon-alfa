@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
<link rel="stylesheet" href="{{URL::asset('css/styles.css')}}" type="text/css">
</head>

<div class="container">
    <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header text-md-center text-white">{{ __('Chery Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group form-group ">
                            <label for="email" class="col-md-4 col-form-label text-md-left text-white">{{ __('auth.email-label') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="input-group-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                        <div class="input-group form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-left text-white">{{ __('auth.password-label') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div><br>

                        <div class="row align-items-center remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Lembrar me') }}   
                        </div><br>
                        
                        <div class="form-group">
                            <button type="submit" class="btn float-right login_btn">
                                {{ __('auth.button_login') }}
                            </button>
                        </div>
                        
                    </form>
                    </div>
                    <div class="card-footer">        
                            <div class="d-flex justify-content-center">     
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('auth.forgot_password-label') }}
                                    </a>
                                @endif
                            </div>        
                    </div>
            </div>
    </div>
</div>
@endsection
