<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>

    <!-- Styles -->
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
       
       
        <nav>
            <h1>Admin Page Nagigation</h1>
        </nav>
        
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
