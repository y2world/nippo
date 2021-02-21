@extends('layouts.app')
@section('content')
<div class="mt-3"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ガイド') }}</div>

                <div class="card-body">
                <b>ここではNIPPOの使い方を説明します。</b><br>
                    このサイトでは毎日のプログラミング学習の記録ができます。<br>
                    <br>
                    ・学習日<br>
                    学習した日付を選択してください。
                    <br>
                    <br>
                    ・学習内容
                    <br>
                    学習した内容を入力してください。
                    <br>
                    大まかな内容、感想でも結構です。
                    <br>
                    <br>
                    ・学習時間<br>
                    学習した時間を入力してください。
                    <br>
                    0.5時間刻みで入力できます。
                    <br>
                    <br>
                    ・学習言語<br>
                    学習したプログラミング言語を入力してください。
                    <br>
                    複数の言語でも入力可能です。
                    <br>
                    <br>
                    ・カテゴリー<br>
                    学習のカテゴリーを選択してください。
                    例 : 自習、アプリ開発、読書など
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="mt-5"></div>
@endsection
