<br><?php
$sql="delete from tb_gbook where gbook_id='$_GET[gbook_id]'";
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