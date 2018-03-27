<?php 
// starting the session
session_start();
$_SESSION["incorrect"]="0";
$_SESSION['regno'] = $_POST['regno'];
echo $_POST['regno'];
header( 'Location: action_page.php' );
exit();
?>