@extends('layouts.helloapp')

@section('title','Session')

@section('menubar')
@parent
Session Page
@endsection

@section('content')
<p>{{$session_data}}</p>
    <form action ="/hello/session" method="post">
        {{ csrf_field() }}
     <input type="text" name="input">
     <input type="submit" value="send">
</form>
@endsection

@section('footer')
Copyright@2022
@endsection