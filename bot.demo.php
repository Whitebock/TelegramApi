<?php
	require_once('./src/api.telegram.php');
	$bot = new Bot('token');

	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		
		$me = $bot -> getMe();
		echo 'ID: '.$me -> id.'<br>';
		echo 'Username: '.$me -> username.'<br>';
		echo 'Full Name: '.$me -> first_name.'<br>';

		//$obj = $bot -> setWebhook(array('url' => 'https://example.com/bot.demo.php'));
		//$boolstring = ($obj) ? 'true' : 'false';
		//echo 'Webhook set: '.$boolstring;
	}
	else if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$stream_data = file_get_contents('php://input');
		$json = json_decode($stream_data);
		$update = parseClass($json, 'Update');
		
		$userid = $update -> message -> chat -> id;
		
		$bot -> sendMessage($userid, 'DEMO');
	}

?>