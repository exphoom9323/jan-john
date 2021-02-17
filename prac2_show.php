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
		<h2>ผลการตัดคะแนน</h2>
		<?php
				
				if($_POST['score'] <= 49){
					echo "คะแนนของคุณคือ : ".$_POST['score']."<br>คุณได้เกรด : F<br>";
				}
				elseif($_POST['score'] <= 59){
					echo "คะแนนของคุณคือ : ".$_POST['score']."<br>คุณได้เกรด : D<br>";
				}
				elseif($_POST['score'] <= 69){
					echo "คะแนนของคุณคือ : ".$_POST['score']."<br>คุณได้เกรด : C<br>";
				}
				elseif($_POST['score'] <= 79){
					echo "คะแนนของคุณคือ : ".$_POST['score']."<br>คุณได้เกรด : B<br>";
				}
				elseif($_POST['score'] <= 100){
					echo "คะแนนของคุณคือ : ".$_POST['score']."<br>คุณได้เกรด : A<br>";
				}
				
				else
					echo "กรุณากรองคะแนนระหว่าง 0-100 คะแนน !";
				
			?>
		<br><br><a href="index.php?page=prac2"><button type="button" class="btn btn-outline-info" >กรอกคะแนนใหม่อีกครั้ง</button></a>
	</div>
<br>
<br>
<br>
<br>
</body>
</html>