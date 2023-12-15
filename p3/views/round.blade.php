@extends('templates/master')

@section('title')
    Round Details
@endsection
@section('content')
    <h2>Round Details</h2>
    <ul>
        <li>Round id: {{ $round['id'] }}< <a href='/history'>Back to round history page</a>
            @endsection
