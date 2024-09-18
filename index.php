<?php

	include_once('functions/start.php');	
	include_once('functions/functions.php');

	start();


	include_once('content/header.php');
	

	if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	$y = $_POST['year'];
	$m = $_POST['month'];
	$d = $_POST['day'];
	$sex = $_POST['sex'];

	include_once('content/content.php');
	
}



	if (!($_SERVER['REQUEST_METHOD'] == 'POST'))
{
	
	include_once('content/title.php');

}
	else include_once('content/logo.php');


	include_once('content/footer.php');


?>

