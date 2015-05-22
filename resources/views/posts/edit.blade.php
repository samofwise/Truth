@extends('app')

@section('content')
    <h1 class="header">Edit</h1>
    <div class="divider"></div>
    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
        @include('posts._form', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}

    @include('errors.list')

@stop
