@extends('app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h2>欢迎来到 Laravel 社区
                <a class="btn btn-primary btn-lg pull-right" href="#" role="button">发布新帖</a>
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                @foreach($discussions as $discussion)
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src="{{ $discussion->user->avatar }}" alt="64X64">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{ $discussion->title }}</h4>
                            {{ $discussion->user->name }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop