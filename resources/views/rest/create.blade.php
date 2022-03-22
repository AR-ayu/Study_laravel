@extends('layouts.helloapp')

@section('title','rest.create')

@section('menubar')
@parent
Rest page for ADDING
@endsection

@section('content')

<table>
    <form action ="/rest" method="post">
        {{ csrf_field() }}
     <tr><th>message: </th><td><input type="text" name="message" 
     value="{{old('message')}}"></td></tr>
     <tr><th>url: </th><td><input type="text" name="url"
     value="{{old('url')}}"></td></tr>
     <tr><th></th><td><input type="submit"
     value="send"></td></tr>
</form>
</table>
@endsection

@section('footer')
Copyright@2022
@endsection