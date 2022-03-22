
@extends('layouts.helloapp')

@section('title','Show')

@section('menubar')
@parent
show database Page
@endsection

<!-- @section('content')
<!-- #FOR SHOWING SPECIFIC DATABASE WITH ID -->
<table>
    <tr><th>id:</th><td>{{$item->id}}</td></tr>
    <th>Name</th><td>{{$item->name}}</td></tr>
    <th>Mail</th> <td>{{$item->mail}}</td></tr>
    <th>Age</th><td>{{$item->age}}</td></tr>
</table>
@endsection -->



<!-- #FOR SHOWING ID RANGE DATABASE -->
@section('content')
  @if($items != null)
  @foreach($items as $item)
  <table width="500px">
      <tr><th width = "50px">id:</th>
      <td width ="50px">{{ $item->id }}</td>
      <th width ="10px">name:</th>
      <td>{{ $item->name}}</td></tr>
</table>
@endforeach
@endif
@endsection

@section('footer')
 Copyright 2022 LARAVEL
 @endsection
