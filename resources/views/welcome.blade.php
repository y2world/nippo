<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NIPPO - TOP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                color: #636b6f;
                font-family: 'Oswald', sans-serif;
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
                color: grey;
            }

            .start {
                font-size: 30px;
            }

            .btn-square-little-rich {
                position: relative;
                display: inline-block;
                padding: 0.25em 0.5em;
                text-decoration: none;
                color: #FFF;
                background: #03A9F4;/*色*/
                border: solid 1px #0f9ada;/*線色*/
                border-radius: 4px;
                box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
                text-shadow: 0 1px 0 rgba(0,0,0,0.2);
            }

            .btn-square-little-rich:active {
                /*押したとき*/
                border: solid 1px #03A9F4;
                box-shadow: none;
                text-shadow: none;
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

            .platform {
                font-size: 25px;
            }

            .text {
                font-size: 20px;
            }

            @media screen and (max-width: 480px) {
                .text {
                    font-size:14px;
                }
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

                <br>
                <div class="text">
                誰もが投稿しやすく<br>
　              勉強した内容や時間を見やすく<br>
　              仲間とともに勉強を続けられる環境を作っていきます
                </div>

                <br>
                <br>
                
                <a href="{{ url('/register') }}" class="btn-square-little-rich">さぁ、始めよう！</a>

                <br>
                <br>
                <br>

                <div class="links">
                    <a href="{{ url('/help') }}">ヘルプ</a>
                    <a href="{{ url('/guide') }}">ガイド</a>
                    <a href="{{ url('/contact') }}">お問い合わせ</a>
                </div>
            </div>
        </div>
    </body>
</html>
