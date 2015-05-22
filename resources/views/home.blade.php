@extends('app')

@section('content')
    <div class="ui segment">
        <h1 class="ui header">Truth.</h1>
        <a href="{{action('PostsController@create')}}" class="ui right floated primary button"><i class="plus icon"></i>New Post(A)</a>
        <div class="ui divider"></div>
        <div class="ui fluid search">
            <input class="prompt" type="text" placeholder="Tags..">
            <div class="results"></div>
        </div>

            @if(count($posts))
                <div class="ui cards">
                    @foreach ($posts as $post)
                        <div class="card">
                            <div class="content">
                                <div class="header">{{$post->title}}</div>
                                <div class="description">{{$post->body}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                {{'WOOOT'}}
            @endif

    </div>
@endsection
