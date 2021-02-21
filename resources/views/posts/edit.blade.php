@extends('layouts.app')
@section('content')
<div class="mt-3"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
            {{csrf_field()}}
            {{method_field('PATCH')}}
                <div class="form-group">
                    <label>学習日</label><br>
                    <input type="date" placeholder="yyyy-mm-dd" name="date" value="{{ $post->date }}"> </textarea>
                </div>
                <label>内容</label>
                    <textarea class="form-control" rows="5" name="content">{{ $post->content }}</textarea>
                <div class="form-group">
                    <label>学習時間</label>
                    <br>
                    <input type="text" value="{{ $post->hour}}" name="hour">時間
                </div>
                <div class="form-group">
                    <label>言語</label>
                    <input type="text" class="form-control" rows="4" value="{{ $post->language}}" name="language">
                </div>
                <div class="form-group">
                    <label>カテゴリー</label>
                    <input type="text" class="form-control" value="{{ $post->category }}" name="category">
                </div>
                <div class="update">
                <button type="submit" class="btn btn-primary">更新する</button>
                </div>
            </form>    
                <br> 
            <div class="delete">     
            <form action='{{ route('posts.destroy', $post->id) }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("削除しますか？");'>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
