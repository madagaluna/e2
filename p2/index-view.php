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
        <input type='radio' name="perform_ time" id="1pm" value="1"><label for='1pm'>
            <input type='radio' name="perform_ time" id="2pm" value="2"><label for='2pm'>
                <input type='radio' name="perform_ time" id="3pm" value="3"><label for='3pm'>

                    <?php echo (!isset($choice) or $choice == 'heads') ? 'checked' : ''; ?>>
                    <label for='perform-time'>Enter a time (1,2, or 3):</label>

                    <button type='submit'>Submit</button>

    </form>

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