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

        <main class="py-4">
        <?php

?>

<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="utf-8" />
    <title>NIPPO</title>
    <link rel="stylesheet" href="stylesmysql.css">
<style>
body {
width:700px;
}

</style>

 </head>
 
 <body>

   <h2>マイページ</h2>
   <br>


  
   <form method="post" >  
     <div>
         <p>学習日</p>
         <input type="date">
     </div> 
     <br>
     <div class="contents">
       <p>学習内容：</p>
       <textarea style="width:60%; height:100px;" placeholder="「躓いたこと」「できるようになったこと」など"></textarea> 
     </div><br>

     <div class="time">
       <p>学習時間</p>
       <input type="number" min="0" step="0.25"></input>時間
     </div><br>

     <div class="language">
         <p>学習言語</p>
         <input type="checkbox" value="html"><lavel for="html">HTML</label>&nbsp;
         <input type="checkbox" value="css"><lavel for="css">CSS</label>&nbsp;
         <input type="checkbox" value="javascript"><lavel for="javascript">Java Script</label>&nbsp;
         <input type="checkbox" value="php"><lavel for="php">PHP</label>&nbsp;
         <input type="checkbox" value="other"><lavel for="other">その他
         </label>
     </div>    
     <br>
     <div class="category">
        <p>カテゴリー</p> 
        <input type="checkbox" value="lecture"><lavel for="lecture">授業</label>
        <input type="checkbox" value="selfstudy"><lavel for="selfstudy">自習</label>&nbsp;
        <input type="checkbox" value="task"><lavel for="task">課題</label>&nbsp;
        <input type="checkbox" value="reading"><lavel for="reading">読書</label>&nbsp;
        <input type="checkbox" value="output"><lavel for="output">アウトプット会</label>&nbsp;
        <input type="checkbox" value="other"><lavel for="other">その他</label>&nbsp;<input type="text">
     </div>
     <br>
     <div class="date">
     <p>
     <?php 
     date_default_timezone_set('Asia/Tokyo');
     echo date("Y/m/d H:i:s") ?>
    </p> 
     </div><br>

     <div class="submit">
       <input type="submit" value="投稿する" >
     </div>
   </form>
 
    
   <hr>
   
   
   
  
  </body>
</html>
    


        </main>
    </div>
</body>
</html>
