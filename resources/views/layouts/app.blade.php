<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('NIPPO', 'NIPPO') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">


<style>
    html, body {
        font-family: helvetica;
    }
    .navbar-brand {
        font-family: 'Allerta Stencil', sans-serif;
    }
    .logo {
        font-family: 'Allerta Stencil', sans-serif;
        text align:right;
        font-size: 25px;
    }

    .logo a {
        color:  white;
    }

    .logo a:hover {
        color:gray;
        text-decoration: none; 
    }


    .links a:hover {
        color:gray;
        text-decoration: none; 
    }

    .links a {
        color:  white;
        padding : 0 20px;
    }

    .links {
        font-size: 12px;
    }

    
    footer {
        color:  white;
        background-color: black;
        bottom: 0; /*下に固定*/
        margin-top: auto;
    }

    .welcome1 {
        height: 700px;
        background-color: #F8FDF5;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .welcome2 {
        height: 250px;
        background-color: #FAF45F;
        text-align: center;
        font-size:20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .welcome3 {
        height: 250px;
        background-color: #FAF45F;
        text-align: center;
        font-size:20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .welcome4 {
        height: 250px;
        background-color: #FAF45F;
        text-align: center;
        font-size:20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nippo {
        font-size: 1300%;
        font-family: 'Allerta Stencil', sans-serif;
        text-align:center;
    }

    .catchcopy {
        font-size: 25px;
        font-family: 'Allerta Stencil', sans-serif;
    }

    span {
        display: inline-block;
    }

    @media only screen and (max-width: 1200px) {
        .nippo {
        font-size: 500%;
        font-family: 'Allerta Stencil', sans-serif;
        text-align:center; }

        .catchcopy {
        font-size: 15px;
        font-family: 'Allerta Stencil', sans-serif;
        }

        .welcome2 {
        font-size:15px;
        }

        .welcome3 {
        font-size:15px;
        }

        .welcome4 {
        font-size:15px;
        }

        .links a {
        color:  white;
        padding : 0 9px;
    }
    
    @media screen and (max-width: 1200px) {
        .nippo {
        font-size: 500%;
        font-family: 'Allerta Stencil', sans-serif;
        text-align:center; }   

        .catchcopy {
        font-size: 15px;
        font-family: 'Allerta Stencil', sans-serif;
        } 
}
    }

</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('NIPPO', 'NIPPO') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('posts/create') }}">
                                        {{ __('マイページ') }}
                                        <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id )}}">
                                        {{ __('過去の学習記録') }}
                                    <a class="dropdown-item" href="{{ url('posts') }}">
                                        {{ __('みんなの学習記録') }}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        </main>
    </div>
@yield('content')
<footer>
    <footer class="text-left bg-dark text-white">
        <br>
        <div class="container">
            <div class="col-md">
                <div class="row">
                    <div class="col-md-10 my-auto">
                        <div class="links">
                            <a href="{{ route('login.guest') }}"><span>ゲストログイン</span></a>
                            <a href="{{ url('/help') }}"><span>ヘルプ</span></a>
                            <a href="{{ url('/guide') }}"><span>ガイド</span></a>
                            <a href="{{ url('/contact') }}"><span>お問い合わせ</span></a>
                        </div>  
                    </div>
                    <div class="col-md-2 my-auto">
                        <div class="logo">
                            <a href="{{ url('/') }}">NIPPO</a>
                        </div>  
                    </div>
                </div>
            </div>
        </div> 
        <br>
    </footer>  
</footer>

            <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>

            <script>

                $(function(){
                //フッターを最下部に固定
                    var $footer = $('#footer');
                    if(window.innerHeight > $footer.offset().top + $footer.outerHeight() ) {
                        $footer.attr({'style': 'position:fixed; top:' + (window.innerHeight - $footer.outerHeight()) + 'px;' });
                    }
                })

            </script>     
  
</body>
</html>
