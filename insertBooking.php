<?php
header("Access-Control-Allow-Origin: *");
try{	
	$db = new PDO('sqlite:targo.sqlite');
	$id = $_REQUEST['u_id'];	
	$business_id = $_REQUEST['business_id'];
	$title = $_REQUEST['service_title'];
	$service_id = $_REQUEST['service_id'];
	$time = $_REQUEST['time'];
	$date = $_REQUEST['date'];



$sql = "INSERT INTO orders (user_id, service_id, title, business_id, time,  date, status) VALUES ('$id','$service_id', '$title', '$business_id','$time', '$date', 'Planned')";

echo   "INSERT INTO orders (user_id, service_id, business_id, time,  date) VALUES ('$id','$service_id', '$business_id','$time', '$date')";
$stmt = $db->prepare($sql);

$stmt->execute();
 echo $stmt->rowCount() . " records added successfully";
}catch(PDOException $e){
	echo("ERROR!" . $e);
}
$db=null;
?> 