<?php
header("Content-Type:application/json");
include("functions.php");
if(!empty($_GET['name'])){
$name=$_GET['name'];
$price=get_price($name);

	if(empty($price))
		deliver_response(200,"book not found",NULL);
	else
		deliver_response(200,"Book found",$price);


}
else
{
	deliver_response(400,"Invalid Request",NULL);
}

function deliver_response($status,$status_message,$data)
{
	header("HTTP/1.1 $status $status_message");
	$response['status']=$status;
	$response['status_message']=$status_message;
	$resonse['data']=$data;
	
	$json_response=json_encode($response);
	echo $json_response;
}
?>