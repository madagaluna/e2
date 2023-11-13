@extends('templates/master')

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
    <li> Frameworks have 2 code bases, Skeleton and core </li>
    <li> server is set to public and the index and location are different, too:<br><br>
        root /var/www/e2/zipfoods/public;<br>
        index index.php index.html;<br>
        location / {<br>
        try_files $uri $uri/ /index.php?$query_string;<br>
        }</li>
    </li>
    <li>Index.php</li>
    <ol>
        <li>Is in the public directory</li>
        <li>sets up autoload</li>
        <li>creates new instance</li>
        <li>invokes routing system</li>
        <li>is not .blade.php</li>
    </ol>
    <li>routes.php</li>
    <ol>
        <li>has array that each element points to</li>
    </ol>
    <li>AppController.php</li>
    <ol>
        <li> app<controllers<AppController.php< /li>
        <li>takes METHOD</li>
        <li>returns VIEW</li>
    </ol>
    <li>views</li>
    <ol>
        <li>uses blade.php</li>
        <li>not within the apps folder</li>
        <li>uses templates, not classes</li>
        <li>has front page content.</li>
    </ol>
</ul>





@endsection