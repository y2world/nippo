@extends('layouts.app')
@section('content')
<div class="mt-3"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('FAQ') }}</div>

                <div class="card-body">
                <b>Q. このサイトでは何ができますか？</b><br>
                    A. 毎日のプログラミング学習の記録ができます。<br>
                    <br>
                    ・過去の学習記録<br>
                    あなたが学習した記録を振り返ることができます。
                    <br>
                    記録を編集することも可能です。
                    <br>
                    <br>
                    ・みんなの学習記録<br>
                    NIPPOユーザーの学習記録を閲覧できます。
                    <br>
                    コメント機能は近日実装予定です。
                    <br>
                    <br>
                    ・ユーザーページ<br>
                    ユーザーの学習記録が閲覧できます。
                    <br>
                    <br>
                    <b>Q.今後どのようなアップデートがありますか？</b><br>
                    A. 今後のアップデートでは、学習時間の合計、いいね機能、コメントなどの機能を実装予定です。
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="mt-5"></div>
@endsection
