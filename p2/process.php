<?php


session_start();  // the data has to be available when user is redirected back - create the
var_dump($_POST);
$perform_time = $_POST['perform_time'];  
$openTime = availableTimes()

if($perform_time == $openTime){
    return $performerA_time != $perform_time;
}




function availableTimes($performerA_time, $performerB_time)
{
    return $performerA_time != $perform_time;
    $results = [];
}
//$flip = flipcoin(); // return heads or tails
//$flip = ['heads', 'tails'][rand(0, 1)]; //got rid of fx and calling ^ fx cuz it was overkill

//$winner = $choice == $flip; // ternary'd 15 minutes on wk 8 pt 2
//access superglobal, create key -results - and set it to an arry of results of winner, flip and choice
//$_SESSION['results'] = [  // the index page extracts this info
//    'winner' => $winner,
//    'flip' => $flip,
//   'choice' => $choice,
//];
// redirect user back to index page - use header, string name of the file to direct back to
//header('location: index.php');


//function flipCoin()
//{
//    $coin = ['heads', 'tails'];
//    return $coin[rand(0, 1)];
//}

//var_dump($choice);
//var_dump($flip);
//var_dump($winner);

// send user back to the form, passing along the results

//form c to handle the form submissions
// page with form, submit to form send back to page with results.
// view submits to process.php, this checks the game and redirects back to the index page

// set up subdomains

/*session_start();

$answer = $_POST['answer'];

$haveAnswer = true;

if ($answer == '') {
    $haveAnswer = false;
} elseif ($answer == 'pumpkin') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct
];

header('Location: index.php');*/