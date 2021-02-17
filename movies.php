<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><br><br><br><br>
<form action="index.php?page=movies_insert" method="post">
<div class="form-group">
    <label for="exampleFormControlSelect1">ประเภทภาพยนตร์:</label>
    <select class="form-control" name="movies_cate" id="movies_cate">
      <option>Action</option>
      <option>Drama</option>
      <option>Comedy</option>
      <option>Romance</option>
      <option>Adventure</option>
    </select>
  </div>
<div class="form-group">
 <label>เรื่อง:</label>
 <input type="text" class="form-control" name="movies_name" id="movies_name" />
</div>
<div class="form-group">
 <label>ราคา:</label>
 <input type="text" class="form-control" name="movies_price" id="movies_price" placeholder="กรุณากรอกเฉพาะตัวเลข..." onKeyUp="if(this.value*1!=this.value) this.value='' ;"/>
 </div>
 <span class="input-group-btn">
 <button type="submit" class="btn btn-outline-success"><i class="fa fa-address-card-o"></i> บันทึก</button>
 </span>
</form>
<br><br>
<div class="table-responsive">
<table class="table table-striped table-dark">
 <thead>
 <tr>
 <th scope="col">ลำดับ</th>
 <th scope="col">ประเภทภาพยนตร์</th>
 <th scope="col">เรื่อง</th>
 <th scope="col">ราคา</th>
 <th scope="col">แก้ไขข้อมูล</th>
 </tr>
</thead>
<tbody>
<?php
$sql="SELECT * FROM tb_movies";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH) ){
?>
 <tr>
 <td><?=$row['movies_id']?></td>
 <td><?=$row['movies_cate']?></td>
 <td><?=$row['movies_name']?></td>
 <td><?=$row['movies_price']?></td>
 <td><a href="index.php?page=movies_edit&movies_id=<?=$row['movies_id']?>" onclick="return confirm('คุณแน่ใจที่จะแก้ไข ใช่หรือไม');">
 <button type="button" class="btn btn-outline-secondary"><i class="fa fa-cogs" aria-hidden="true"></i> แก้ไขข้อมูล</button></a></td>
 </td>
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
