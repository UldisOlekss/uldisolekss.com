<?php
if(isset($_POST)) {
	deliver_response("ping", $_POST);
}

function deliver_response($status_message, $data) {
	header("HTTP/1.1 $status_message");
	$response['status_message'] = $status_message;
	$response['data'] = $data;

$json_response = json_encode($response);
	echo $json_response;
}
?>