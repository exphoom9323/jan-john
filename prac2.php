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
		<h2>เงื่อนไขการตัดเกรด</h2>
		<p>คะแนนระหว่าง 80-100 ได้ A<br>
		คะแนนระหว่าง 70-79 ได้ B<br>
		คะแนนระหว่าง 60-69 ได้ C<br>
		คะแนนระหว่าง 50-59 ได้ D<br>
		คะแนนระหว่าง 0-49 ได้ F</p><br><br>
	<form id="form1" name="form1" method="post" action="index.php?page=prac2_show">
	<label for="textfield">กรุณากรอกเกรดของคุณ</label>	
	 	<div class="col-lg-6">
    		<div class="input-group">
      			<input type="text" class="form-control" placeholder="กรุณากรอกเฉพาะตัวเลข..." name="score" id="score" onKeyUp="if(this.value*1!=this.value) this.value='' ;">
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