<?php
	require_once('config.php');
	require_once('TwitterAPIExchange.php');

	$lat = $_GET['lat']; 
	$lng = $_GET['lng'];

	$settings = array(
		'oauth_access_token' => TWITTER_ACCESS_TOKEN,
		'oauth_access_token_secret' => TWITTER_ACCESS_TOKEN_SECRET,
		'consumer_key' => TWITTER_CONSUMER_KEY,
		'consumer_secret' => TWITTER_CONSUMER_SECRET,
	);

	$url = 'https://maps.google.com/?q=' . $lat . ',' . $lng;
	$str = 'Help Needed! Please help. Link: ' .$url;

	$url = 'https://api.twitter.com/1.1/statuses/update.json';
	$requestMethod = 'POST';
	$apiData = array(
		'status' => $str,
	);

	$twitter = new TwitterAPIExchange($settings);
	$twitter->buildOauth($url, $requestMethod);
	$twitter->setPostfields($apiData);
	$response = $twitter->performRequest(true, array(CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_SSL_VERIFYPEER => 0));
?>