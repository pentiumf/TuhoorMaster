<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Styles -->
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   
   <div class="auth-container animated bounceInDown">
    
    <div class="auth-wrap">
        
        <div class="auth-header">
            <h1>
                <a href="{{ url('/') }}">tuhoor.<span>com</span></a>
            </h1>
            
            <h2>Login</h2>
        </div>
        
        <div class="auth-body">
           
            <form id="loginForm" class="authForm" action="{{ route('login') }}" method="POST">
               {{ csrf_field() }}
                
                <div class="field-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-field" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                    @if ($errors->has('email'))
                        <br><br>
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="field-wrap{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <br><br>
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="field-wrap">
                    <label>
                        <input type="checkbox" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}> <span id="rememberMeText">Remember Me</span>
                    </label>
                </div>
                
                <div class="field-wrap">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                    <br> <br>
                    <a id="forgotPassword" class="switch-auth-route" href="{{ route('password.request') }}">
                        Forgot Your Password ?
                    </a>
                    <br> <br>
                    <a id="signupQuery" class="switch-auth-route" href="{{ route('register') }}">
                        Dont't have an account ? Sign Up
                    </a>
                </div>
                
            </form>
            
        </div>
        
    </div>
    
    <div class="auth-footer">
        <p>Copyright © 2016 - 2017 Tuhoor LLC. All rights reserved <a href="">Terms of Use</a> | <a href="">Privacy Policy</a></p>
    </div> 
    
</div>
     
    

    <script src="{{ asset('js/libs.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>





















