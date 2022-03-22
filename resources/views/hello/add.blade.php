@extends('layouts.helloapp')

@section('title','Add')

@section('menubar')
@parent
新作成したページ
@endsection

@section('content')
<table>
    <form action="/hello/add" method="post">
        {{ csrf_field() }}
    <tr><th>name:</th><td><input type="text" name="name">
    </td></tr>
    <tr><th>mail:</th><td><input type="text" name="mail">
    </td></tr>
    <tr><th>age:</th><td><input type="text" name="age">
    </td></tr>
    <tr><th></th><td><input type="submit" value="send">
    </td></tr>
</form>
</table>
@endsection

@section('footer')
Copyright 2022 Homenix
@endsection