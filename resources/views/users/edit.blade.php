@extends('app)

@section('content')
    <h1 class="header">Edit</h1>
    <div class="divider"></div>

    <div class="field">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name') !!}
    </div>
    <div class="field">
        {!! Form::label('email', 'Email) !!}
        {!! Form::text('email') !!}
    </div>

    <div class="field">
        {!! Form::label('displayname', 'Display Name') !!}
        {!! Form::text('displayname') !!}
    </div>

    <div class="field">
        {!! Form::label('password', 'Password') !!}
        {!! Form::text('password')
    </div>

    <div class="field">
        {!! Form::label('passwordconfirm', 'Confirm Password') !!}
        {!! Form::text('passwordconfirm')
    </div>

    {!! Form::submit('Update', ['class' => 'ui submit button']) !!}

@stop