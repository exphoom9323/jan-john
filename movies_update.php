<br><?php
$today=date("Y-m-d");
$sql="update tb_movies set movies_cate='$_POST[movies_cate]',movies_name='$_POST[movies_name]',movies_price='$_POST[movies_price]',movies_update='$today' where movies_id='$_POST[movies_id]'";
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
<meta http-equiv="refresh" content="3;url=index.php?page=movies"/>
<br>