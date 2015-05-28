@extends('app')

@section('content')
    <h1 class="header">Posts</h1>
    <a href="{{action('PostsController@create')}}">
        <div class="ui right floated primary icon button"><i class="plus icon"></i>Create</div>
    </a>
    <table class="ui table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Creator</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Tags</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($posts))
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user()->displayName}}</td>
                    <td>{{$post->created_at}}/td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        @if(count($post->tags()))
                            @foreach($post->tags() as $tag)

                            @endforeach
                        @else
                            No Tags
                        @endif
                    </td>
                    <td>
                        <a class="deleteButton" data-id="{{$post->id}}" data-title="{{$post->title}}"><i
                                    class="red trash outline icon"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    @include('posts.deleteModal')


@stop