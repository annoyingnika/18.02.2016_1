<?php
	
	//Getting the message from address
	// if there is ?name= .. then $_GET["name"]
	$my_message = $_GET["message"];
	$name = $_GET["name"];
	$from = $_GET["from"];

	echo $from." says \"".$my_message."\" to ".$name;

?>

<h2> First application </h2>

<form method="get">

	<label for="name">To:<label><br>
	<input type="text" name="name"><br>
	
	<label for="from">From:<label><br>
	<input type="text" name="from"><br>
	
	<label for="message">Message:<label><br>
	<input type="text" name="message"><br>
	
	
	<input type="submit" value="Save to DB">
	
	
<form>	