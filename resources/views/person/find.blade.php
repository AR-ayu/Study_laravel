
@extends('layouts.helloapp')

@section('title','Person.find')

@section('menubar')
@parent
Find person
@endsection

@section('content')
<form action ="/person/find" method="post">
    {{ csrf_field() }}
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="find">
</form>
@if (isset($item))
<table>
    <tr><th>DATA</th></tr>
    <tr>
        <td>{{$item->getData()}}</td>
</tr>
</table>
@endif
@endsection

@section('footer')
 Copyright 2022 LARAVEL
 @endsection
