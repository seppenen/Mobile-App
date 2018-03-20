<?php
header("Access-Control-Allow-Origin: *");
try{	
	$db = new PDO('sqlite:targo.sqlite');	
	$user_id = $_REQUEST['user_id'];
	
	$sql  = "SELECT * FROM orders WHERE user_id='$user_id'";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);

}catch(PDOException $e){
	echo("ERROR!" . $e);
}
$db=null;
?> 