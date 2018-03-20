<?php
header("Access-Control-Allow-Origin: *");
try{	
	$db = new PDO('sqlite:targo.sqlite');
	$id = $_REQUEST['user_id'];	
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$address = $_REQUEST['address'];

/*$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $db->prepare("INSERT INTO users (name, address, phone) 
    VALUES (:name, :address, :phone)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':phone', $phone);
*/

$sql = "UPDATE users set name='$name', phone='$phone', address='$address' where user_id='$id'";

echo "UPDATE users set name='$name', phone='$phone', address='$address' where user_id='$id'";
$stmt = $db->prepare($sql);

$stmt->execute();
 echo $stmt->rowCount() . " records UPDATED successfully";
}catch(PDOException $e){
	echo("ERROR!" . $e);
}
$db=null;
?> 