<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><br><br><br><br>
<form action="index.php?page=gbook_insert" method="post">
<div class="form-group">
 <label>พิมพ์ข้อความที่นี่:</label>
 <input type="text" class="form-control" name="gbook_text" id="gbook_text" />
</div>
<div class="form-group">
 <label>ชื่อของคุณคือ:</label>
 <input type="text" class="form-control" name="gbook_name" id="gbook_name" />
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
 <th scope="col">gbook_id</th>
 <th scope="col">gbook_text</th>
 <th scope="col">gbook_name</th>
 <th scope="col">gbook_date</th>
 <th scope="col">ลบ</th>
 <th scope="col">แก้ไขข้อมูล</th>
 </tr>
</thead>
<tbody>
<?php
$sql="SELECT * FROM tb_gbook";
$result=$db->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH) ){
?>
 <tr>
 <td><?=$row['gbook_id']?></td>
 <td><?=$row['gbook_text']?></td>
 <td><?=$row['gbook_name']?></td>
 <td><?=$row['gbook_date']?></td>
 <td><a href="index.php?page=gbook_delete&gbook_id=<?=$row['gbook_id']?>" onclick="return confirm('คุณแน่ใจที่จะลบข้อมูลจริงหรือไม่')" class="btn btn-outline-danger">
 <i class="fa fa-trash-o"></i> ลบ</a>
 <td><a href="index.php?page=gbook_edit&gbook_id=<?=$row['gbook_id']?>" onclick="return confirm('คุณแน่ใจที่จะแก้ไข ใช่หรือไม');">
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
