@extends('layouts.helloapp')

@section('title','USER-AUTH')

@section('menubar')
@parent
USER-AUTHENTICATIONページ
@endsection

@section('content')
<p>{{$message}}</p>
<table>
    <form action="/hello/auth" method="post">
        {{ csrf_field() }}
    <tr><th>mail:</th><td><input type="text" name="email">
    </td></tr>
    <tr><th>pass:</th><td><input type="password" name="password">
    </td></tr>
    <tr><th></th><td><input type="submit" value="send">
    </td></tr>
</form>
</table>
@endsection

@section('footer')
Copyright 2022 Homenix
@endsection