<br><?php
$today=date("Y-m-d");
$sql="insert into tb_car(car_brand,car_gen,car_price,car_update)
values('$_POST[car_brand]','$_POST[car_gen]','$_POST[car_price]','$today')";
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
?><br>
<meta http-equiv="refresh" content="3;url=index.php?page=car" />