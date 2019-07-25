<?php
if(isset($_POST)) {
	deliver_response(200, "success", $_POST);
}

function deliver_response($status, $status_message, $data) {
	header("HTTP/1.1 $status $status_message");
	$response['status'] = $status;
	$response['status_message'] = $status_message;
	$response['data'] = $data;

$json_response = json_encode($response);
	echo $json_response;
}
?>