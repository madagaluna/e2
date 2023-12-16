@extends('templates/master')

@section('title')
    Round Details
@endsection
@section('content')
    <h2>Round Details</h2>
    <ul>
        <li>Round id: {{ $round['id'] }}</li>
        <li>Time Selected: {{ $round['choice'] }}</li>
        <li>Disposition: {{ $round['play'] ? 'Gig!' : 'No Gig' }}</li>
        <li>Timestamp: {{ $round['timestamp'] }}</li>
        <a href='/history'>&larr;Back to round history page</a>
    </ul>
@endsection
