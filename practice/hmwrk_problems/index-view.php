<!doctype html>
<html lang='en'>

<head>
    <title>Week 7 homeword practice</title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>
</head>

<body>

    <h1> Week 7 Practice </h1>
    <h1>Rock or Roll</h1>
    <h2>Game Mechanics</h2>
    <p> fUN WITH fUNCTIONS ... PUTTING THE FUNC INTO FUNCTIONS </p>

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