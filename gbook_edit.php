<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

	<?php
		$sql="select * from tb_gbook where gbook_id='$_GET[gbook_id]'";
		$result=$db->query($sql);
		$row=$result->fetch_array(MYSQLI_BOTH);
	?>
    <br/>
<form action="index.php?page=gbook_update" method="post">
<div class="form-group">
 <label>พิมพ์ข้อความที่นี่:</label>
 <input type="text" class="form-control" name="gbook_text" id="gbook_text" value="<?=$row['gbook_text']?>" />
</div>
<div class="form-group">
 <label>ชื่อของคุณคือ:</label>
 <input type="text" class="form-control" name="gbook_name" id="gbook_name" value="<?=$row['gbook_name']?>"/>
 </div>
 <span class="input-group-btn">
 <input name="gbook_id" type="hidden"value="<?=$row['gbook_id']?>" />
 <button type="submit" class="btn btn-outline-success"><i class="fa fa-cogs"></i> แก้ไขข้อมูล</button>
 </span>
</form>
            <br/>
</body>
</html>