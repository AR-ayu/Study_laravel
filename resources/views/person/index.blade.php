
@extends('layouts.helloapp')

@section('title','Person.index')

@section('menubar')
@parent
INDEX Page
@endsection

@section('content')

<table>
    <tr><th>PERSON</th><th>BOARD</th></tr>
    @foreach ($hasItems as $item)
    <tr>
        <td>{{$item->getData()}}</td>
        <td> 
                <table width="100%">
                @foreach ($item->boards as $obj)
                <tr><td>{{$obj->getData()}}</td></tr>
                 @endforeach
                </table>
</td>
</tr>
@endforeach
</table>
         <div style ="margin:10px;"></div>
         <table>
             <tr><th>Person</th></tr>
             @foreach ($noItems as $item)
             <tr>
                 <td>{{$item->getData()}}</td>
</tr>
@endforeach
</table>
@endsection

@section('footer')
 Copyright 2022 LARAVEL
 @endsection
