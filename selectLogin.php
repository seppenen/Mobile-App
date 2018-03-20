<?php
header("Access-Control-Allow-Origin: *");
try{	
	$db = new PDO('sqlite:targo.sqlite');	
	$user = $_REQUEST['user'];
	$pwd = $_REQUEST['pwd'];
	$sql  = "SELECT user_id, name, address, phone, name FROM users WHERE username='$user' AND password='$pwd'";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);

}catch(PDOException $e){
	echo("ERROR!" . $e);
}
$db=null;
?> 