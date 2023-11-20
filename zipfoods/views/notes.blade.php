@extends('templates/master') {{-- the master template gives the basic look (nav bar, etc) check it out in templates --}}

@section('title')
{{ $welcome }}
@endsection

@section('content')

<h2>{{ $welcome }}</h2>

<h3>The current time is {{$time}}</h3>

<p>Hello and welcome! This is the boilerplate splash page for my application built with <a
        href='https://github.com/susanBuck/e2framework'>e2framework</a>.</p>
key things to remember this week:
<ul>
    <li> Frameworks have 2 code bases: Skeleton and Core </li>
    <li> The server block is set to public and the index and location are different, too:<br><br>
        root /var/www/e2/zipfoods/public;<br>
        index index.php index.html;<br>
        location / {<br>
        try_files $uri $uri/ /index.php?$query_string;<br>
        }</li>
    </li><br>
    <li>index.php</li>
    <ol>
        <li>Is in the public directory</li>
        <li>sets up autoload</li>
        <li>creates new instance</li>
        <li>invokes routing system</li>
        <li>is not .blade.php</li>
    </ol><br>
    <li>routes.php</li>
    <ol>
        <li>has array that each element points to</li>
    </ol><br>
    <li>AppController.php</li>
    <ol>
        <li> app'<'controllers'<'AppController.php </li>
        <li>takes METHOD</li>
        <li>returns VIEW</li>
    </ol><br>
    <li>views</li>
    <ol>
        <li>uses blade.php</li>
        <li>not within the apps folder</li>
        <li>uses templates, not classes</li>
        <li>has front page content.</li>
    </ol>
</ul>





@endsection


This was the index page with the time and the random hello (called from the app controller page, see below)

@extends('templates/master') {{-- the master template gives the basic look (nav bar, etc) check it out in templates --}}

@section('title')
{{ $welcome }}
@endsection

@section('content')

<h2>{{ $welcome }}</h2>

<h3>The current time is {{$time}}</h3>

<p>Hello and welcome! This is the boilerplate splash page for my application built with <a
        href='https://github.com/susanBuck/e2framework'>e2framework</a>.</p>



@endsection

App Controller:

public function index()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];

        return $this->app->view('index', [   //returns the view
            'welcome' => $welcomes[array_rand($welcomes)],
            'time' => date('g:ia')
        ]);
    }

from products index.blade:

    <div id='product-index'>
    @foreach ($products as $product)
    <a class='product-link' href='/product?sku={{ $product['sku'] }}'>
        {{-- This is how to append unique sku via key-value pair for each product and link to its own page via the query string - this is visible in view source--}}
        {{-- you can add multiple key-value pairs using the ampersand: e.g. &category = xyz'-}}
        {{-- create SHOW method on productsConstroller page}}
        <div>