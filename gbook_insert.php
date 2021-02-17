<br><?php
$today=date("Y-m-d");
$sql="insert into tb_gbook(gbook_text,gbook_name,gbook_date)
values('$_POST[gbook_text]','$_POST[gbook_name]','$today')";
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
<meta http-equiv="refresh" content="3;url=index.php?page=gbook" />