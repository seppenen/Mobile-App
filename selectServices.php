<?php
header("Access-Control-Allow-Origin: *");
try{	
	$db = new PDO('sqlite:targo.sqlite');	
	$business_id = $_REQUEST['id'];
	
	$sql  = "SELECT * FROM business_service WHERE business_id='$business_id'";
	$array = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);	
	echo json_encode($array);

}catch(PDOException $e){
	echo("ERROR!" . $e);
}
$db=null;
?> 