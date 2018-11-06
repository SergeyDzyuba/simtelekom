<?php

function curl_send($url, $headers = false, $body = false){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt($ch,CURLOPT_TIMEOUT, 10); 
	$postResult = curl_exec($ch);

	if (curl_errno($ch)) {
		print curl_error($ch);
	}
	curl_close($ch);
	return $postResult;
}

function xml2array($xml) {
	return json_decode(json_encode((array)simplexml_load_string($xml)),1);
}