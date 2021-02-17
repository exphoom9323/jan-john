<br>
<?php
$sql="select * from tb_movies where movies_id='$_GET[movies_id]'";
$result=$db->query($sql);
$row=$result->fetch_array(MYSQLI_BOTH);
?>
<form action="index.php?page=movies_update" method="post">
<div class="form-group">
    <label for="exampleFormControlSelect1">ประเภทภาพยนตร์:</label>
    <select class="form-control" name="movies_cate" id="movies_cate" >
	<option><?=$row['movies_cate']?></option>
      <option>Action</option>
      <option>Drama</option>
      <option>Comedy</option>
      <option>Romance</option>
      <option>Adventure</option>
    </select>
  </div>
<div class="form-group">
 <label>ชื่อเรื่อง:</label>
 <input type="text" class="form-control" name="movies_name" id="movies_name" value="<?=$row['movies_name']?>" />
 </div>
 <div class="form-group">
 <label>ราคา:</label>
 <input type="text" class="form-control" name="movies_price" id="movies_price"  placeholder="กรุณากรอกเฉพาะตัวเลข..." onKeyUp="if(this.value*1!=this.value) this.value='' ;" value="<?=$row['movies_price']?>" />
 </div>
 <span class="input-group-btn">
 <input name="movies_id" type="hidden" value="<?=$row['movies_id']?>" />
 <button type="submit" class="btn btn-outline-success"><i class="fa fa-cogs"></i> แก้ไขข้อมูล</button>
 </span>
</form>
<br>