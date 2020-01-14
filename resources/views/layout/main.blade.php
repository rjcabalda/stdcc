<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/member.css') }}" rel="stylesheet">
    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    STDCC
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                
                </div>
            </div>
        </nav>

        <div class="container" style="padding-top:20px">
            <div class="row">
                
                 <div class="col-lg-4">
                     <ul class="list-group">
                            <li class="list-group-item">
                                <a href=" {{ url('/') }} ">Home</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ route('member.list') }}">List of Member</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('add_member') }}">Add Member</a>
                            </li>
                     </ul>
                 </div>
                
                 <div class="col-lg-8">
                    @yield('content')
                </div>
            </div>
        </div>

       
    </div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
