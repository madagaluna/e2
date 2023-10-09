<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Project 1</title>
    <meta charset="utf-8">

</head>

<body>
    <h1>Rock or Roll</h1>
    <h2>Game Mechanics</h2>
    <p> The goal of the game is for "The Foos" to be randomly assign a time to perform. Their time is added to the
        schedule Then "The
        Bars" are randomly assigned a time to perform. If there is not a conflict with the times, "The Bars" time is
        added to the schedule. Otherwise, just "The Foos" perform.</p>

    <ul>
        <li>One array (I'm pretty sure both data points would be in one array) for location and time, starts empty in
            the controller.</li>
        <li>Addresses and performance times will be preset in the form (view)</li>
        <li>User will select an address and a time for their performance from the form</li>
        <li>Controller will determine whether the location and time is acceptable by running the variables against other
            scheduled performances in the location and time array.
        <li>If there is no conflict, controller will add location and time to the the specific array and the user will
            send a message to the view to display for the user "You can Rock! Schedule the next band". Continue until
            all the bands have been scheduled</li>
        <li>If there is a conflict with other performances, controller will clear form (?) and the user will get a
            message "Roll again!"
            <!--  Depending on how
            difficult this is, the message may have more detail about why there is a conflict -->
        </li>
    </ul>
    <h2>Results</h2>
    <ul>

        <li>Once all the bands have been schedule, the user will get a message "Rock and Roll: Everyone wins!"
        </li>
    </ul>

</body>

</html>