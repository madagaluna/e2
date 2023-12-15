@extends('templates/master')


@section('content')
    <h2>Enter a time to Perform!</h2>
    <h3>If no one else on your street is playing, you've got a gig.
        <br><br> Otherwise, you've got a show to watch!<h3>
            time:<br><br><br><br>

            <form method='POST' action='/process'>
                <input type='radio' id='1pm' name='choice' value="1pm">
                <label for='1pm'>1pm</label>

                <input type='radio' id='2pm' name='choice' value="2pm">
                <label for='2pm'>2pm</label>

                <input type='radio' id='3pm' name='choice' value="3pm">
                <label for='3pm'>3pm</label>

                <button type='submit'>BOOM!</button>
            </form> <br>
            @if ($app->errorsExist())
                <ul class='error alert alert-danger'>
                    @foreach ($app->errors() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @if ($choice)
                <div class ='results'>
                    The other band is playing at {{ $taken }}, you chose {{ $choice }}

                    @if ($play)
                        <span class='play'>You've got a gig!</span>
                    @else
                        <span class='dance'>Dust off your dancing shoes - you're in the audience today. Feel free to pick
                            another
                            time.</span>
                    @endif
                </div>
            @endif
            <a href='/history'>&larr; Check out the history page</a>
        @endsection
