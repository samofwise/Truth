@extends('app')

@section('content')
    <h1 class="header">New Post.</h1>
    <div class="divider"></div>
    {!! Form::open(['action' => 'PostsController@store']) !!}
    <div class="ui form">
        @include('posts._form', ['submitButtonText' => 'Create'])

        {!! Form::submit('Create', ['class' => 'ui submit button']) !!}
    </div>
    {!! Form::close() !!}

    @include('errors.list')
@stop