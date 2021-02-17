<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<br>
<br>
<br>
<br>
	<div align="center">
	<form id="form1" name="form1" method="post" action="index.php?page=prac3_show">
	<label for="textfield">กรุณากรอกตัวเลขที่ต้องการแสดงสูตรคูณ</label>	
	 	<div class="col-lg-6">
    		<div class="input-group">
      			<input type="text" class="form-control" placeholder="กรุณากรอกเฉพาะตัวเลข..." name="num" id="num" onKeyUp="if(this.value*1!=this.value) this.value='' ;">
      			<span class="input-group-btn">
        			<button class="btn btn-outline-success" type="submit">Success!</button>
     			 </span>
    		</div>
  		</div>
	</form>
	</div>
	<br>
<br>
<br>
<br>
</body>
</html>