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
        schedule. Then "The Bars" are randomly assigned a time to perform. If there is not a conflict with the times,
        "The Bars" time is added to the schedule. Otherwise, just "The Foos" perform. </p>

    <ul>
        <li>Initialize an array to hold results </li>
        <li>Create an array of available performance times</li>
        <li>For Performer A, randomly choose a time to perform: </li>
        <li>For Performer B, randomly choose a time to perform</li>
        <li>If the time is available, update the schedule to include PB </li>
        <li>Else, update schedule that The Bars will not perform </li>
        <li>Concatenate the schedule and make it a string </li>
        <li>Show results </li>

    </ul>
    <h2>Results</h2>
    <?php foreach($results as $result) { ?>
    <ul>
        <li>The Foos were signed up for <?php echo $result['the_Foos_time'] ?>
        </li>
        <li>The Bars were signed up for <?php echo $result['the_Bars_time'] ?>
        </li>
        <li>The performance time(s) will be: <?php echo $result['the_Schedule_is'] ?>
        </li>
    </ul>
    <?php } ?>
</body>

</html>