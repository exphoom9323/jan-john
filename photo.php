<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<br><br>
<body>
<form action="index.php?page=photo_insert" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <label>
    <input type="file" name="photo" id="photo" />
  </label>
  <label>
    <input type="submit" name="button" id="button" value="อัพโหลดรูปภาพ" />
  </label>
  <input type="hidden" name="photo_cate_id" id="photo_cate_id" value="<?=$_GET['photo_cate_id']?>" />
</form>
<div class="container">
 <div class="row">
<?php
$sql="SELECT * FROM tb_photo where photo_cate_id='$_GET[photo_cate_id]'";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH) ){
?>
 <div class="col-md-4" align="center">
 <div class="thumbnail img-fluid animaPhoto">
 <a href="photo_upload/<?=$row['photo']?>" target="_blank">
 <img src="photo_upload/<?=$row['photo']?>" width="50%" height="50%" style="box-shadow: 0 0 10px black;" class="imgrounded">
 </a>
 </div>
 </div>
<?php
}
?>
 </div>
 </div>
<?php
mysqli_close($db);
?>
</body>
</html>