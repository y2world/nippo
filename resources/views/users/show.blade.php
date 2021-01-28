@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <div class="mb-4">
        <h2>{{ $user_name }}の学習記録</h2>
    </div>

<div class="row">
    <div class="col-sm">
        <div class="card-header">
            <h4>過去の学習記録</h4>
         </div>
        @foreach ($posts as $post)
        <li class="list-group-item">
        <p class="card-date">日時 : {{ $post->date }}&nbsp;({{ $post->hour }}時間)</p>
        <p class="card-content">学習内容 : {{ $post->content }}</p>
        <p class="card-category">言語 : {{ $post->language }}</p>
        <p class="card-category">カテゴリー : {{ $post->category }}</p>
        </li>
        @endforeach
    </div>
@endsection