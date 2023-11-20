@extends('templates/master') {{-- the master template gives the basic look (nav bar, etc) check it out in templates --}}

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')

<h2>Welcome!</h2>

<p>
    {{ $app->config('app.name') }} is your one-stop-shop for convenient online grocery shopping in the greater Boston
    area.
</p>

<p>
    <a href='/products'>Check out our selection of products...</a>
</p>



@endsection