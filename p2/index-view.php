<!-- using form c to handle the form submissions  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project 2 Rock or Roll</title>
    <link href=data , rel=icon>
</head>

<body>
    <h2> Project 2 - Rock and Roll </h2>

    <form method='POST' action='process.php'>
        <input type=text id='perform-time' name='choice' value='1'
            <?php echo (!isset($choice) or $choice == 'heads') ? 'checked' : ''; ?>>
        <label for='perform-time'>Enter a time (1,2, or 3):</label>
        <input type=text id='perform-time' name='choice' value='2'
            <?php echo (!isset($choice) or $choice == 'heads') ? 'checked' : ''; ?>>
        <label for='perform-time'>Enter a time (1,2, or 3):</label>
        <input type=text id='perform-time' name='choice' value='3'
            <?php echo (!isset($choice) or $choice == 'heads') ? 'checked' : ''; ?>>
        <label for='perform-time'>Enter a time (1,2, or 3):</label>
        <button type='submit'>Submit</button>
        `
    </form>
    <!-- see if you have results using isset -->
    <?php if (isset($results)) { ?>



    <!--  use variables from the index.php to output data-->
    <h2> RESULTS </h2>

    The coin landed on <?php echo $flip; ?>

    <?php if($winner) { ?>
    YOU WON THE COIN TOSS!
    <?php } else { ?>
    YOU LOST, Please try again
    <?php } ?>

    <?php } ?>
</body>

</html>