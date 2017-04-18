@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" role="main">
                {!! Form::open(['url'=>'/discussions']) !!}

                <div class="form-group">
                    {!! Form::label('title','标题:') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body','内容:') !!}
                    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                </div>
                <div>
                    {!! Form::submit('发布帖子',['class'=>'btn btn-primary pull-right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop