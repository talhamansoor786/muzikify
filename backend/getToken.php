<?php

	$str = '070449eb078042689b31afcdd536d051:ea55847af9704cafb4aeb80ae77f3ef2';
	$string = base64_encode($str);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://accounts.spotify.com/api/token");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
	curl_setopt($ch, CURLOPT_POST, 1);

	$headers = array();
	$headers[] = "Authorization: Basic MDcwNDQ5ZWIwNzgwNDI2ODliMzFhZmNkZDUzNmQwNTE6ZWE1NTg0N2FmOTcwNGNhZmI0YWViODBhZTc3ZjNlZjI=";
	$headers[] = "Content-Type: application/x-www-form-urlencoded";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	curl_close ($ch);

	if($result){
		$obj			= json_decode($result);
		$access_token	= $obj->{'access_token'};
		$arr = array(
			'status' => true,
			'access_token' => $access_token
		);
		$arr = json_encode($arr);
		echo $arr;
	}else{
		$arr = array(
			'status' => false
		);
		$arr = json_encode($arr);
		echo $arr;
	}

?>