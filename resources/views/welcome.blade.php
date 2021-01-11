<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NIPPO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .btn-square-little-rich:active {
                /*押したとき*/
                border: solid 1px #03A9F4;
                box-shadow: none;
                text-shadow: none;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/posts') }}">マイページ</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                NIPPO
                </div>

                <p>
                誰もが投稿しやすく<br>
　              勉強した内容や時間を見やすく<br>
　              仲間とともに勉強を続けられる環境を作っていきます
                </p>

                <a href="{{ url('/register') }}" class="btn-square-little-rich">さぁ、始めよう！</a>
                <br>
                <br>
            
                    <div class="links">
                    <a href="{{ url('/contact') }}">お問い合わせ</a>
                    <a href="{{ url('/help') }}">ヘルプ</a>
                    <a href="{{ url('/guide') }}">ガイド</a>
                </div>
            </div>
        </div>
    </body>
</html>
