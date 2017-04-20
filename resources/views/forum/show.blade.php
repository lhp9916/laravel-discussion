@extends('app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-circle" src="{{ $discussion->user->avatar }}" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">
                        {{ $discussion->title }}
                        @if(Auth::check() &&  Auth::user()->id == $discussion->user_id)
                            <a class="btn btn-primary btn-lg pull-right" href="/discussions/{{$discussion->id}}/edit"
                               role="button">修改帖子</a>
                        @endif
                    </h4>

                    {{ $discussion->user->name }}

                </div>
            </div>


        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                <div class="blog-post">
                    {!! $html !!}
                </div>
            </div>
        </div>
    </div>
@stop