<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BUG_TRACKER') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
</head>
<body >
   
    @auth
    <div id="app">
        @include('inc.message')
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
             
          
              
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
          

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                            
                         
                            <li class="nav-item dropdown">
                  
                                    {{ Auth::user()->username }}
                               

                                
                                    <a class="dropdown-item" href="{{ url('/logout')}}">
                                       
                                       
                                        {{ __('Logout') }}
                                    </a>
                                    
                         

                                    
                            </li>
                          
                         
                            
                           
                                   
                     
                      
                    </ul>
                   
                               
             
            </div>
        </nav>
        @endauth 
        <main class="py-4">
            @yield('content')
        </main>
    </div>
     
</body>

</html>
