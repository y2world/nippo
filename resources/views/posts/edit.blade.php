@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MY PAGE') }}</div>

                <div class="card-body">
                   <section>
                    <p>投稿完了しました</p>
                    <button onclick="location.href='home.php'">戻る</button>
                    </section>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
