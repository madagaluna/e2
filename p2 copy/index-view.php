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
        <!-- dont need values to be exposed, so  use post, action is where to submit the form to -->
        <!-- on a different page you have    = the array is populated by  the value-->
        <!-- ?? = the value, heads or tail from the name ('choice') array 
                created a ternary php island to have the radial button checked based on previous choice-->
        <input type='radio' id='heads' name='choice' value='heads'
            <?php echo (!isset($choice) or $choice == 'heads') ? 'checked' : ''; ?>><label for='heads'>heads</label>
        <!-- change to dropdown or text -->
        <!-- to make the two radio buttons the same, the name is the same (the name data is used only when getting data during submission - the Postsuperglobal will have the array with all the data, it will be keyed/indexed based on the name "choice"), match the lable to the ID, added checked on heads to make it the default choice-->
        <input type='radio' id='tails' name='choice' value='tails'
            <?php echo (isset($choice) and $choice == 'tails') ? 'checked' : '' ?>>
        <label for='tails'>tails</label><!-- to make the two -->
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