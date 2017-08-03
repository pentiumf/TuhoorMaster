<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register</title>

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
            
            <h2>Register</h2>
        </div>
        
        <div class="auth-body">
           
            <form id="registerForm" class="authForm" action="{{ route('register') }}" method="POST">
               {{ csrf_field() }}
                
                <div class="field-wrap{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <br><br>
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="field-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
                   <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                   @if ($errors->has('email'))
                        <br><br>
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif    
                </div>
                
                <div class="field-wrap{{ $errors->has('password') ? ' has-error' : '' }}">
                     <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required>
                     @if ($errors->has('password'))
                        <br><br>
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="field-wrap{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                
                <div class="field-wrap">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
                
                <div class="field-wrap">
                    <a id="signupQuery" class="switch-auth-route" href="{{ route('login') }}">
                    Already have an account ? Login
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


