<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>User Page</title>

    <!-- Styles -->
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
       
       
       
        <!--   Nav Bar    -->
        <nav id="nav-bar">
           
            <!-- Brand Logo -->
            <div id="nav-brand">
                <div id="nav-brand-logo">
                    <a href="{{ url('/') }}">
                        <img src="http://res.cloudinary.com/hj2pj4atp/image/upload/v1488810054/tuhoor_jxghph.png" alt="Logo.png">
                    </a>
                </div>
            </div>
            
            <!--  Nav Link    -->
            <div id="nav-links">
                <div id="nav-links-container">
                    <ul>
                        <li><a href="{{ url('/') }}">Consultants</a></li>
                        <li><a href="{{ url('/') }}">Builders</a></li>
                        <li><a href="{{ url('/') }}">Services</a></li>
                    </ul>
                </div>
            </div>
            
            
            <!--  Nav Auth  -->
            <div id="nav-auth">
                @if (Auth::guest()) 
                <a id="guest-pull" href="#">Hi Guest <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                @else 
                <a id="guest-pull" href="#">Hi {{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                @endif
                
                
                
                <div id="auth-guest">
                    @if (Auth::guest())
                    <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                    
                    @else 
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" type="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endif
                    
                </div>
                
            </div>
            
            <!-- Nav Search -->
            <div id="nav-search">
                <div id="search-containter">
                   
                   {!! Form::open(['method' => 'GET']) !!}
                   
                   {{ csrf_field() }}
                   <div id="seach-form-wrap">
                       <i class="fa fa-search" aria-hidden="true"></i>
                       {!! Form::text('query', null, ['id' => 'search', 'placeholder' => 'Search']) !!}
                   </div>
                   
                   {!! Form::close() !!}
                   
                </div>
            </div>
        </nav>
        <!--  End Of Nav bar  -->
        
        <!--  Page Content  -->
        <div id="Page-Content">
            @yield('content')
        </div>
        <!-- End 0f Page Content  -->
        
        <!--    Footer    -->
            @yield('footer')
        <!--    End Of Footer    -->    

    <!-- Scripts -->
    <script src="{{ asset('js/libs.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
