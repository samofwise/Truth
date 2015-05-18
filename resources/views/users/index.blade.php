@extends('app')

@section('content')
    <h1 class="header">People</h1>
    <div class="primary button">Invite Contributer</div>
    <table class="ui table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
            <th>Type</th>
            <th>...</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John Lilki</td>
            <td>September 14, 2013</td>
            <td>jhlilk22@yahoo.com</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Jamie Harington</td>
            <td>January 11, 2014</td>
            <td>jamieharingonton@yahoo.com</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Jill Lewis</td>
            <td>May 11, 2014</td>
            <td>jilsewris22@yahoo.com</td>
            <td>Yes</td>
        </tr>
        </tbody>
    </table>

@stop