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
		<h2>โปรโมชั่นลดราคา</h2>
		<p>ถ้าซื้อสินค้าตั้งแต่ 1,000 บาท ขึ้นไป จะลดราคาให้ 20 %<br>
		ถ้าซื้อสินค้าตั้งแต่ 500 บาท แต่ไม่ถึง 1,000 บาท จะลดราคาให้ 10 %<br>
		ถ้าซื้อสินค้าตั้งแต่ 100 บาทแต่ไม่ถึง 500 บาท จะลดราคาให้ 5 %<br>
		ถ้าซื้อสินค้าต่ ากว่า 100 บาท จะไม่ลดราคาให้ </p><br><br>
	<form id="form1" name="form1" method="post" action="index.php?page=prac1_show">
	<label for="textfield">กรุณากรอกราคาสินค้า</label>	
	 	<div class="col-lg-6">
    		<div class="input-group">
      			<input type="text" class="form-control" placeholder="กรุณากรอกเฉพาะตัวเลข..." name="price" id="price" onKeyUp="if(this.value*1!=this.value) this.value='' ;">
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
<!-- ดัดแปลงมาจากของ ณัฐดนัย อุดง  -->