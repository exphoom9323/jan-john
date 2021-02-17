<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$sql="insert into tb_bike_type(bike_type_name) values ('$_POST[bike_type_name]')";
$result=$db->query($sql);
if($result){
?>
<div class="alert alert-success">
 <strong>Success!</strong> บันทึกข้อมูลสำเร็จ
</div>
<?php
}
else{
?>
<div class="alert alert-warning">
 <strong>Warning!</strong> บันทึกข้อมูลไม่สำเร็จ
</div>
<?php
}
mysqli_close($db);
?>
<meta http-equiv="refresh" content="3;url=index.php?page=bike_type" />

</body>
</html>