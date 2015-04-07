<?php

include_once('/var/www/html/final/header.php'); 
include_once('/var/www/html/final/final-lib.php');
connect($db); 

//echo "<html><h2>Leisure - You Make Your Own Choice</h2></html>"; 

switch($s) { 
	case 0;    
	echo "
	<html><center><h2>Lets Begin<br>
	<center><h2>How are you feeling today??
	<form method = post action=index.php?s=1>
	<input type =\"submit\" value=\"Start Now\">

	</html>";
	break;



	case 1:
	echo "
	<html>
	<form method= post action=index.php?s=2>
	<center><h2>Do not think much, select the first thing that appeals to you the most<br>
	Popcorn with friends : 	<input type=\"radio\" name=\"firstChoice\" value=\"in\" checked/><br>
	Horse Riding:	<input type=\"radio\" name=\"firstChoice\" value=\"out\"/><br>
	Movies:  <input type=\"radio\" name=\"firstChoice\" value=\"both\"/><br>
	<input type =\"submit\" value =\"Next\"><br>
	</html>	";
	break;

	case 2:
	echo "
	<html>
	<form method =post action =index.php?s=3>
	<center><h2>Lets do this again, select one of the option as fast as you can<br>
	Books : <input type=\"radio\" name=\"secondChoice\" value=\"both\"/><br>
	Interior Decoration :<input type=\"radio\" name=\"secondChoice\" value=\"in\"/><br>
	New Apparels : <input type=\"radio\" name=\"secondChoice\" value=\"out\"/><br>
	<input type =\"submit\" value =\"Next\"><br>
	</html>";
	break;

	case 3:	
	if ($firstChoice="in" && $secondChoice ="in"){
	echo " <html><form method =post action =index.php?s=4>
	<>
	";
	
	}
}
?>
