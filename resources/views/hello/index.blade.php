
@extends('layouts.helloapp')
<style>
    .pagination { font-size:10pt; }
    .pagination li { display:inline-block }
    tr th a:link { color:white; }
    tr th a:visited { color:white; }
    tr th a:hover { color:white; }
    tr th a:active { color:white; }
    </style>

@section('title','Index')

@section('menubar')
@parent
INDEX Page with pagination
@endsection

@section('content')

@if (Auth::check())
<p>User: {{ $user->name . '(' . $user->email . ')'}}</p>
@else
<p>*Please Login in here!! (<a href="/login.blade.php">logged in</a>|
<a href = "/register.blade.php">Register</a>)</p>
@endif

<table>
    <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
</tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
</tr>
@endforeach
</table>
{{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
 Copyright 2022 LARAVEL
 @endsection
