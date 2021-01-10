@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('過去の学習記録') }}</div>

                <div class="card-body">
                   <p>学習記録なし</p> 
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
