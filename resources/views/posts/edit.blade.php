@extends('app')

@section('content')
<h1 class="header">Edit</h1>
<div class="divider"></div>
{!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
<div class="ui form">
    @include('posts._form', ['submitButtonText' => 'Update'])


</div>
{!! Form::close() !!}

    @include('errors.list')

    @stop
