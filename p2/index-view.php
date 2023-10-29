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
        <label for='perform-time'>Enter a time (1,2, or 3):</label>
        <input type='radio' id='1pm' name='perform_time' value='1pm'><label for='1pm'>1pm</label>
        <input type='radio' id='2pm' name='perform_time' value='2pm'><label for='2pm'>2pm</label>
        <input type='radio' id='3pm' name='perform_time' value='3pm'><label for='3pm'>3pm</label>


        <!--<?php echo (!isset($choice) or $choice == 'heads') ? 'checked' : ''; ?>-->


        <button type='submit'>Submit</button>

    </form>

    <?php if (isset($results)) { ?>



    <!--  use variables from the index.php to output data-->
    <h2> RESULTS </h2>

    The foos are playing at <?php echo $performer_A; ?>

    <?php if($winner) { ?>
    YOU WON THE COIN TOSS!
    <?php } else { ?>
    YOU LOST, Please try again
    <?php } ?>

    <?php } ?>
</body>

</html>