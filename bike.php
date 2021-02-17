<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<br><br>
<body>
<form action="index.php?page=bike_insert" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div class="form-group">
 <label>ยี่ห้อจักรยาน</label>
 <input type="text" class="form-control" name="bike_brand" id="bike_brand" />
 </div>
 <div class="form-group">
 <label>ราคาจักรยาน</label>
 <input type="text" class="form-control" name="bike_price" id="bike_price" placeholder="กรุณากรอกเฉพาะตัวเลข..." onKeyUp="if(this.value*1!=this.value) this.value='' ;"/>
 </div>
  <label>
    <input type="file" name="bike_photo" id="bike_photo" />
  </label>
	<span class="input-group-btn">
		<button class="btn btn-outline-success" type="submit"><i class="fa fa-address-card-o"></i> อัพโหลด</button>
    </span>
  <input type="hidden" name="bike_type_id" id="bike_type_id" value="<?=$_GET['bike_type_id']?>" />
</form>
<br><br>
<div class="container">
 <div class="row">
<?php
$sql="SELECT * FROM tb_bike where bike_type_id='$_GET[bike_type_id]'";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH) ){
?>
 <div class="col-md-4" align="center">
 <div class="thumbnail img-fluid animaPhoto">
 <a href="photo_upload/<?=$row['bike_photo']?>" target="_blank">
 <img src="photo_upload/<?=$row['bike_photo']?>" width="50%" height="50%" style="box-shadow: 0 0 10px black;" class="imgrounded">
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