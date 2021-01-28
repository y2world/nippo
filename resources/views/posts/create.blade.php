@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MY PAGE') }}</div>

                <div class="card-body">
                   <p>あなたの学習記録をシェアしましょう</p>
                   <a href="{{ route('users.show', Auth::user()->id )}}">過去の学習記録</a>
                   <hr>
                   @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                   <form action="{{ route('posts.store') }}" method="POST">
                    {{csrf_field()}}
                        学習日<br>
                        <input type="date" placeholder="yyyy-mm-dd" name="date" value=""><br><br>
                        学習内容<br>
                        <textarea style="width:100%; height:100px;" placeholder="「躓いたこと」「できるようになったこと」など" name="content"></textarea><br>
                        学習時間<br>
                        <input type="number" min="0" step="0.25" name="hour"></input>時間<br><br>
                        学習言語<br>
                        <input type="text" size="30" name="language" placeholder="ex : HTML, CSS, Java Script, PHP" value=""><br><br>
                        カテゴリー<br>
                        <input type="text" size="30"　name="category" placeholder="ex : 自習、読書、課題" value="">

                        <br>
                        <br>
                        <?php 
                        date_default_timezone_set('Asia/Tokyo');
                        echo date("Y/m/d H:i:s") ?>

                        <br>
                        <br>
                        <button type="submit">投稿</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
