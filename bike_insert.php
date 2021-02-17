<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$photo=$_FILES['bike_photo']['tmp_name'];
$photo_name=$_FILES['bike_photo']['name'];


$array_lastname=explode(".",$photo_name);
$c=count($array_lastname)-1;
$lastname=strtolower($array_lastname[$c]);
if(!$photo){
	$photo_name="nophoto.png";
	}
else{
	if($lastname=='jpg' or $lastname=='gif' or $lastname=='png' or $lastname=='jpeg'){
		$photo_name="bike_".time().".".$lastname;
		copy($photo,"photo_upload/".$photo_name);
		unlink($photo);
	}
}
$sql="insert into tb_bike(bike_photo,bike_brand,bike_price,bike_type_id) values('$photo_name','$_POST[bike_brand]','$_POST[bike_price]','$_POST[bike_type_id]')";
$result=$db->query($sql);
if($result){
?>
<div class="alert alert-success"> <strong>Success!</strong> บันทึกข้อมูลสำเร็จ </div>
<?php } else{ ?>
<div class="alert alert-warning">
 <strong>Warning!</strong> บันทึกข้อมูลไม่สำเร็จ
</div>
<?php
}
mysqli_close($db);

?>
<meta http-equiv="refresh" content="3;url=index.php?page=bike&bike_type_id=<?=$_POST['bike_type_id']?>" 

</body>
</html>