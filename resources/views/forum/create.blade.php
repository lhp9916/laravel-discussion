@extends('app')
@section('content')
    <div class="container">
        @include('editor::head')
        <div class="row">
            <div class="col-md-10 col-md-offset-1" role="main">
                {!! Form::open(['url'=>'/discussions']) !!}

                @include('forum.form')

                <div>
                    {!! Form::submit('发布帖子',['class'=>'btn btn-primary pull-right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
<script src="/js/jquery.min.js"></script>