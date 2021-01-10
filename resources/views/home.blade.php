@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MY PAGE') }}</div>

                <div class="card-body">
                   <p>あなたの勉強記録をシェアしましょう</p>
                   <a href="{{ url('/history') }}">過去の学習記録</a>
                   <hr>
                   <form action="history.php" method="post">
                    学習日<br>
                    <input type="date" name="date" value=""><br><br>
                    学習内容<br>
                    <textarea style="width:100%; height:100px;" placeholder="「躓いたこと」「できるようになったこと」など"></textarea><br>
                    学習時間<br>
                    <input type="number" min="0" step="0.25"></input>時間<br><br>
                    学習言語<br>
                    <input type="checkbox" value="html"><lavel for="html">HTML</label>&nbsp;
                    <input type="checkbox" value="css"><lavel for="css">CSS</label>&nbsp;
                    <input type="checkbox" value="javascript"><lavel for="javascript">Java Script</label>&nbsp;
                    <input type="checkbox" value="php"><lavel for="php">PHP</label>&nbsp;
                    <input type="checkbox" value="other"><lavel for="other">その他
                    <br>
                    <br>
                    カテゴリー<br>
                    <input type="checkbox" value="lecture"><lavel for="lecture">授業</label>
                    <input type="checkbox" value="selfstudy"><lavel for="selfstudy">自習</label>&nbsp;
                    <input type="checkbox" value="task"><lavel for="task">課題</label>&nbsp;
                    <input type="checkbox" value="reading"><lavel for="reading">読書</label>&nbsp;
                    <input type="checkbox" value="output"><lavel for="output">アウトプット会</label>&nbsp;<br>
                    <input type="checkbox" value="other"><lavel for="other">その他</label>&nbsp;&nbsp;<input type="text">

                    <br>
                    <br>
                    <?php 
                    date_default_timezone_set('Asia/Tokyo');
                    echo date("Y/m/d H:i:s") ?>


                    <br><br><button type="submit">投稿</button>
                    <hr>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
