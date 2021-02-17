<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><br><br><br><br>
<form  action="index.php?page=tch_insert" method="post">
<div class="form-group">
 <label>ชื่อของคุณคือ:</label>
 <input type="text" class="form-control" name="tch_name" id="tch_name" />
</div>
<div class="form-group">
 <label>นามสกุลของคุณคือ:</label>
 <input type="text" class="form-control" name="tch_lastname" id="tch_lastname" />
 </div>
 <div class="form-group">
 <label>อายุของคุณคือ:</label>
 <input type="text" class="form-control" name="tch_age" id="tch_age" placeholder="กรุณากรอกเฉพาะตัวเลข..." onKeyUp="if(this.value*1!=this.value) this.value='' ;"/>
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
 <th scope="col">ชื่ออาจารย์</th>
 <th scope="col">นามสกุลอาจารย์</th>
 <th scope="col">อายุอาจารย์</th>
 <th scope="col">วันที่บันทึก</th>
 </tr>
</thead>
<tbody>
<?php
$sql="SELECT * FROM tb_tch";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH) ){
?>
 <tr>
 <td><?=$row['tch_id']?></td>
 <td><?=$row['tch_name']?></td>
 <td><?=$row['tch_lastname']?></td>
 <td><?=$row['tch_age']?></td>
 <td><?=$row['tch_date']?></td>
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
