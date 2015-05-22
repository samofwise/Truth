@extends('app')

@section('content')
    <div class="ui segment">
        <h1 class="header">New Post.</h1>
        <div class="divider"></div>
        {!! Form::open(['action' => 'PostsController@store']) !!}
        @include('posts._form', ['submitButtonText' => 'Create'])
        {!! Form::close() !!}
    </div>
    @include('errors.list')
@stop