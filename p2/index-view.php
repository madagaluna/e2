<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project Rock & Roll</title>
    <link href=data , rel=icon>
</head>

<body>
    <h2>Project - Rock & Roll</h2>

    <form method="POST" action="process.php">
        <label for='perform-time'>Enter a time (1, 2, 3):</label>
        <input type='radio' id='1pm' name='perform_time' value="1pm"
            <?php echo (isset($perform_time) && $perform_time == '1pm') ? 'checked' : ''; ?>><label
            for='1pm'>1pm</label>
        <input type='radio' id='2pm' name='perform_time' value="2pm"
            <?php echo (isset($perform_time) && $perform_time == '2pm') ? 'checked' : ''; ?>><label
            for='2pm'>2pm</label>
        <input type='radio' id='3pm' name='perform_time' value="3pm"
            <?php echo (isset($perform_time) && $perform_time == '3pm') ? 'checked' : ''; ?>><label
            for='3pm'>3pm</label>

        <button type='submit'>Submit</button>
    </form>

    <?php if (isset($results)) { ?>
    <h2> RESULTS </h2>
    <?php foreach ($results as $result) { ?>
    <p>
        <?php foreach ($result as $key => $value) { ?>
        <?php echo $key . ': ' . $value; ?>
        <br>
        <?php } ?>
    </p>
    <?php } ?>
    <?php } ?>
</body>

</html>