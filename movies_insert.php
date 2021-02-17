<br><?php
$today=date("Y-m-d");
$sql="insert into tb_movies(movies_cate,movies_name,movies_price,movies_update)
values('$_POST[movies_cate]','$_POST[movies_name]','$_POST[movies_price]','$today')";
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
<meta http-equiv="refresh" content="3;url=index.php?page=movies" />