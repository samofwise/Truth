@extends('app')

@section('content')
    <h1 class="ui header">People</h1>
    <div class="ui primary button">Invite Contributor</div>
    <table class="ui table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th>Type</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->displayName}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->type()}}</td>
                <td></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@stop