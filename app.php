<?php
	
	//Getting the message from address
	// if there is ?name= .. then $_GET["name"]
	$my_message = $_GET["message"];
	$name = $_GET["name"];

	echo "My message is ".$my_message. " for ".$name;

?>

<h2> First application </h2>

<form method="get">

	<label for="name">To:<label><br>
	<input type="text" name="name"><br>
	
	<label for="message">Message:<label><br>
	<input type="text" name="message"><br>
	
	<input type="submit" value="Save to DB">
	
	
<form>	