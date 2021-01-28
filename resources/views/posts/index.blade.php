@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    みんなの学習記録
                </div>
                @foreach ($posts as $post)
                <div class="card-body">
                <b>日時</b> : {{$post->date}}
                <br>
                <b>学習時間</b> : {{ $post->hour }}時間
                <br>
                <b>学習内容</b> : {{ $post->content }}
                <br>
                <b>言語</b> : {{ $post->language }}
                <br>
                <b>カテゴリー</b> : {{ $post->category }}
                <p class="card-category">by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</p>
                </li>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">編集</a>
                    <a href="#" class="btn btn-primary">コメントする</a>
                </div>
                <div class="card-footer text-muted">
                    {{ $post->created_at }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection