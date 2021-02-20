@extends('layouts.app')

@section('content')
<div class=welcome1>
    <div class="container">
        <div class="col-md">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <div class="nippo">
                    NIPPO
                    </div>
                </div>    
                <div class="col-md-6 my-auto">
                    <div class="catchcopy">
                    <span>プログラミング学習を</span><span>毎日記録</span>
                </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<div class=welcome2>
    <div class="container">
        <div class="col-md">
            <div class="row">
                <div class="col-md-6 my-auto">
                    誰もが投稿しやすく 
                </div>    
                <div class="col-md-6 my-auto">
                    <img src={{ asset('images/img1.png') }} class="image" width="50%">
                </div>
            </div>
        </div>
    </div>
</div>        
<div class=welcome3>
    <div class="container">
        <div class="col-md">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <img src={{ asset('images/img2.png') }} class="image" width="50%">
                </div>    
                <div class="col-md-6 my-auto">
                    <span>勉強した内容や<span></span><span>時間を見やすく</span>
                </div>
            </div>
        </div>
    </div>
</div>           
<div class=welcome4>
    <div class="container">
        <div class="col-md">
            <div class="row">
                <div class="col-md-6 my-auto">
                   <span>仲間とともに</span><span>勉強を続けられる</span>
                   <br>環境を作っていきます。
                </div>    
                <div class="col-md-6 my-auto">
                    <img src={{ asset('images/img3.png') }} class="image" width="50%">
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>      
@endsection
