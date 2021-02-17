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
			<?php
			echo "ผลคูณของสูตรคูณแม่ ".$_POST['num'].'<br><br>';
			$y = 1;	
			while($y <= 12){
				echo $_POST['num'].' x '.$y.' = '.($_POST['num']*$y).'<br>';
				$y++;
					
			}
			?>
			<br><br><a href="index.php?page=prac3"><button type="button" class="btn btn-outline-info" >กรอกตัวเลขที่จะให้แสดงสูตรคูนใหม่อีกครั้ง</button></a>
	</div>
<br>
<br>
<br>
<br>
</body>
</html>