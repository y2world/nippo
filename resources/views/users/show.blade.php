@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <div class="mb-4">
        <h4>{{ $user_name }}の学習記録</h4>
    </div>

<div class="row">
    <div class="col-sm">
        <div class="card-header">
                    過去の学習記録
        </div>
        @foreach ($posts as $post)
        <li class="list-group-item">
        <b>日時</b> : {{ $post->date }}
        <br>
        <b>学習時間</b> : {{ $post->hour }}時間
        <br>
        <b>学習内容</b> : {{ $post->content }}
        <br>
        <b>言語</b> : {{ $post->language }}
        <br>
        <b>カテゴリー</b> : {{ $post->category }}
        <br>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">編集</a>
        </br>
        @endforeach
    </div>
@endsection