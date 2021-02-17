<br><?php
$sql="delete from tb_car where car_id='$_GET[car_id]'";
$result=$db->query($sql);
if($result){
?>
<div class="alert alert-success">
 <strong>Success!</strong> ลบข้อมูลสำเร็จ
</div>
<?php
}
else{
?>
<div class="alert alert-warning">
 <strong>Warning!</strong> ลบข้อมูลไม่สำเร็จ
</div>
<?php
}
?><br>
<meta http-equiv="refresh" content="3;url=index.php?page=car" />