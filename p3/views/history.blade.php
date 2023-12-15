@extends('templates/master')

@section('title')
    Round History
@endsection
@section('content')
    <h2>Round History</h2>
    <ul>
        @foreach ($rounds as $round)
        @endforeach
    </ul>
    <a href='/'>HOME</a>
@endsection
