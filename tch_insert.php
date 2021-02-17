<br>
<br>
<br>
<?php
$today=date("Y-m-d");
$sql="insert into tb_tch(tch_name,tch_lastname,tch_age,tch_date)
values('$_POST[tch_name]','$_POST[tch_lastname]','$_POST[tch_age]','$today')";
$result=$db->query($sql);
if($result){
?>
<div class="alert alert-success">
 <div align="center"><strong>Success!</strong> บันทึกข้อมูลสำเร็จ</div>
</div>
<?php
}
else{
?>
<div class="alert alert-warning">
 <div align="center"><strong>Warning!</strong>บันทึกข้อมูลไม่สำเร็จ</div>
</div>
<?php
}
?><br>
<br>
<br>
<meta http-equiv="refresh" content="3;url=index.php?page=tch" />