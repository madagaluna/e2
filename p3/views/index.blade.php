@extends('templates/master')


@section('content')

    <h2>ENTER A TIME TO PERFORM!</h2>

    <h3>If no one else on your street is playing, you've got a gig.
        <br> Otherwise, take another roll!<h3>

            <form method='POST' action='/process'>
                <input type='radio' test='1pm-radio'name='choice' value='1pm' id='1pm'>
                <label for='1pm'>1pm</label>

                <input type='radio'test='2pm-radio' name='choice' value='2pm' id='2pm'>
                <label for='2pm'>2pm</label>

                <input type='radio' test='3pm-radio' name='choice' value='3pm' id='3pm'>
                <label for='3pm'>3pm</label>

                <button test='submit-button' type='submit'>ROLL!</button>
            </form> <br>
            @if ($app->errorsExist())
                <ul test='validation-output' class='error alert alert-danger'>
                    @foreach ($app->errors() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            @if ($choice)
                <div test='results-div' class ='results'>
                    The other band is playing at <span test='taken-output'>{{ $taken }}</span>, you chose
                    {{ $choice }} <br>
                    @if ($play)
                        <span test='play-output' class='play'>You've got a gig!</span>
                    @else
                        <span test='dance-output' class='dance'>No Gig! Dust off your dancing shoes or pick another
                            time!</span> <br>
                        <a href='/history'>&larr; Check out the history of Rock or Roll</a>
                    @endif
                </div>
            @endif

        @endsection
