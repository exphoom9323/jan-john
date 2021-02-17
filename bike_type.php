<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br><br>
<form id="form1" name="form1" method="post" action="index.php?page=bike_type_insert">
 <div class="form-group">
 <label>เพิ่มประเภทจักรยาน</label>
 <input type="text" class="form-control" name="bike_type_name" id="bike_type_name" />
 </div>
  <span class="input-group-btn">
 <button type="submit" class="btn btn-outline-success"><i class="fa fa-address-card-o"></i> บันทึก</button>
 </span>
</form>
<div class="table-responsive">
<table class="table table-striped table-dark">
 <thead align="center">
 <tr>
 <th scope="col">ลำดับ</th>
 <th scope="col">ประเภทจักรยาน</th>
 </tr>
 </thead>
<tbody align="center">
<br><br>
<?php
$sql="SELECT * FROM tb_bike_type";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH) ){
?>
 <tr> <td><?=$row['bike_type_id']?></td>
 <td><a href="index.php?page=bike&bike_type_id=<?=$row['bike_type_id']?>"><?=$row['bike_type_name']?></a></td>
 </tr>
<?php } mysqli_close($db); ?>
</tbody>
</table>
</div>
</body>
</html>