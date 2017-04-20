@extends('app')
@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="text-center">
                <img src="{{ Auth::user()->avatar }}" width="60" class="img-circle" alt="">

                {!! Form::open(['url'=>'/avatar','files'=>true]) !!}
                {!! Form::file('avatar') !!}
                {!! Form::submit('上传头像',['class'=>'btn btn-success pull-right']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop