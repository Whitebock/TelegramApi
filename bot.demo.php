<?php
require_once('./src/api.telegram.php');
$bot = new Bot('token');

if($_SERVER['REQUEST_METHOD'] == 'GET'){

	// Print out general information about this bot.
	$me = $bot -> getMe();
	echo 'ID: '.$me -> id.'<br>';
	echo 'Username: '.$me -> username.'<br>';
	echo 'Full Name: '.$me -> first_name.'<br>';

}
else if($_SERVER['REQUEST_METHOD'] == 'POST'){

	// Get the raw data that has been send by telegram.
	$stream_data = file_get_contents('php://input');

	// Convert the raw data into JSON.
	$json = json_decode($stream_data);

	// Parse the JSON into an Update-object we can use.
	$update = parseClass($json, 'Update');

	// Get the id of the user who send a message to this bot.
	$userid = $update -> message -> chat -> id;

	// Replay to the user with a demo message.
	$bot -> sendMessage($userid, 'DEMO');

}
