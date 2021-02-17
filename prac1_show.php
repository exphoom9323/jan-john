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
	<?php
		$discount = 0;
		echo "สินค้าทั้งหมดของคุณมีราคา : ".$_POST['price']." บาท<br>";
		if($_POST['price'] <= 99){
			echo "คุณไม่ได้รับส่วนลดราคาสินค้า<br>ราคาที่ถูกลดสินค้าไป : ";
		} elseif ($_POST['price'] <= 499){
			$discount = 5;
			echo "ได้รับส่วนลด 5% ตามโปรโมชั่น<br>ราคาที่ถูกลดสินค้าไป : ";
		} elseif ($_POST['price'] <= 999){
			$discount = 10;
			echo "ได้รับส่วนลด 10% ตามโปรโมชั่น<br>ราคาที่ถูกลดสินค้าไป : ";
		} elseif($_POST['price'] >= 1000){
			$discount = 20;
			echo "ได้รับส่วนลด 20% ตามโปรโมชั่น<br>ราคาที่ถูกลดสินค้าไป : ";
		}
			$discountTotal = ($_POST['price']*$discount)/100;
			echo $discountTotal." บาท<br>"; 
			$pricetotal = $_POST['price']-$discountTotal;
			echo "จำนวนเงินที่ต้องจ่าย : ".$pricetotal." บาท";
	?>
	<br><br><a href="index.php?page=prac1"><button type="button" class="btn btn-outline-info" >กรอกราคาสินค้าใหม่อีกครั้ง</button></a>
<br>
<br>
<br>
<br>
</body>
</html>