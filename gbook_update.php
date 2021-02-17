<br><?php
$today=date("Y-m-d");
$sql="update tb_gbook set gbook_text='$_POST[gbook_text]',gbook_name='$_POST[gbook_name]',gbook_date='$today' where gbook_id='$_POST[gbook_id]'";
$result=$db->query($sql);
if($result){
?>
<div class="alert alert-success">
 <strong>Success!</strong> แก้ไขข้อมูลสำเร็จ
</div>
<?php
}
else{
?>
<div class="alert alert-warning">
 <strong>Warning!</strong> แก้ไขข้อมูลไม่สำเร็จ
</div>
<?php
}
mysqli_close($db);
?>
<meta http-equiv="refresh" content="3;url=index.php?page=gbook"/>
<br>