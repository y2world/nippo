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
                    <p class="card-date">日時 : {{ $post->date }}&nbsp;({{ $post->hour }}時間)</p>
                    <p class="card-content">学習内容 : {{ $post->content }}</p>
                    <p class="card-category">言語 : {{ $post->language }}</p>
                    <p class="card-category">カテゴリー : {{ $post->category }}</p>
                    <p class="card-category">by&nbsp;<a href="{{ route('users.show', $post->user_id)}}">{{ $post->user_name }}</p>
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