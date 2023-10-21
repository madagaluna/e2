session_start();

if (isset($_SESSION['results'])) { // so you are only looking at the curernt session use if and isset instead of
!is_null($_Session)etc !is_null doesn't work cuz the rest still displays)
$results = $_SESSION['results'];

$haveAnswer = $results['haveAnswer'];
$correct = $results['correct'];

$_SESSION['results'] = null;
}

require 'index-view.php';