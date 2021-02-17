<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><br><br><br><br>
<form  action="index.php?page=car_insert" method="post">
<div class="form-group">
 <label>กรอกยี่ห้อรถยนต์:</label>
 <input type="text" class="form-control" name="car_brand" id="car_brand" />
</div>
<div class="form-group">
 <label>กรอกรุ่นรถยนต์:</label>
 <input type="text" class="form-control" name="car_gen" id="car_gen" />
 </div>

 <div class="form-group">
 <label>กรอกราคารถยนต์:</label>
 <input type="text" class="form-control" name="car_price" id="car_price" placeholder="กรุณากรอกเฉพาะตัวเลข..." onKeyUp="if(this.value*1!=this.value) this.value='' ;"/>
 </div>
	<span class="input-group-btn">
		<button class="btn btn-outline-success" type="submit"><i class="fa fa-address-card-o"></i> Success!</button>
    </span>
</form>
<br><br>
<div class="table-responsive">
<table class="table table-striped">
 <thead>
 <tr>
 <th scope="col">ลำดับที่</th>
 <th scope="col">ยี่ห้อรถยนต์</th>
 <th scope="col">รุ่นรถยนต์</th>
 <th scope="col">ราคารถยนต์</th>
 <th scope="col">วันที่บันทึก</th>
 <th scope="col"> </th>
 </tr>
</thead>
<tbody>
<?php
$sql="SELECT * FROM tb_car";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH) ){
?>
 <tr>
 <td><?=$row['car_id']?></td>
 <td><?=$row['car_brand']?></td>
 <td><?=$row['car_gen']?></td>
 <td><?=$row['car_price']?></td>
 <td><?=$row['car_update']?></td>
 <td><a href="index.php?page=car_delete&car_id=<?=$row['car_id']?>" onclick="return confirm('คุณแน่ใจที่จะลบ ใช่หรือไม');" class="btn btn-outline-danger">
 <i class="fa fa-trash-o"></i> ลบ </span></a></td>
 </tr>
<?php
}
?>
</tbody>
</table>
</div>
<br><br><br><br>
</body>
</html>
