@extends('templates/master')


@section('content')
    <a href='/history'>&larr; Check out past past results</a>


    <h2>Enter a time to Perform!</h2>
    <h3>If no one else on your street is playing, you've got a gig.
        <br><br> Otherwise, you get to dance!<h3>
            time:<br><br><br><br>

            <form method='POST' action='/process'>
                <input type='radio' test='1pm-radio'name='choice' value='1pm' id='1pm'>
                <label for='1pm'>1pm</label>

                <input type='radio'test='2pm-radio' name='choice' value='2pm' id='2pm'>
                <label for='2pm'>2pm</label>

                <input type='radio' test='3pm-radio' name='choice' value='3pm' id='3pm'>
                <label for='3pm'>3pm</label>

                <button test='submit-button' type='submit'>BOOM!</button>
            </form> <br>
            @if ($app->errorsExist())
                <ul class='error alert alert-danger'>
                    @foreach ($app->errors() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @if ($choice)
                <div test='results-div' class ='results'>
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

        @endsection
