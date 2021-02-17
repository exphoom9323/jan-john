<!DOCTYPE html>
<html lang="en">

  <head>
	<link rel="shortcut icon" href="image/icon.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link href="https://fonts.googleapis.com/css?family=Mitr&amp;subset=thai" rel="stylesheet"> 

    <title>BMW i8</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    
  </head>
	<?php
		include("config.php");
	?>
  <body>
   <button  onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#" class="w3-lobster1">Hi my fri.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php" class="w3-lobster1">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          การบ้าน วันที่ 14 พ.ย.
    	    </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=prac1" class="w3-lobster1">Rrac 1</a>
          <a class="dropdown-item" href="index.php?page=prac2" class="w3-lobster1">Rrac 2</a>
          <a class="dropdown-item" href="index.php?page=prac3" class="w3-lobster1">Rrac 3</a>
        </div>
      </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=gbook" class="w3-lobster1">GuestBook</a>
            </li>
          
			<li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Exam
    	    </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=tch" class="w3-lobster1">สอบครั้งที่ 1</a>
          <a class="dropdown-item" href="index.php?page=car" class="w3-lobster1">สอบครั้งที่ 2</a>
		  <a class="dropdown-item" href="index.php?page=movies" class="w3-lobster1">สอบครั้งที่ 3</a>
		  <a class="dropdown-item" href="index.php?page=bike_type" class="w3-lobster1">Final Exam</a>
        </div>
      </li>
	  <li><a class="nav-link"  href="index.php?page=photo_cate">Photo Gallery</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white" class="w3-lobster1">BMW i8</h1>
          <h2 class="display-4 text-white">ยนตรกรรมที่เป็นมากกว่ารถสปอร์ต</h2>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
          <?php 
            if(@$_GET['fd'])
                $file=$_GET['fd']."/".$_GET['page'].".php";
            else
                $file=@$_GET['page'].".php";
            if(is_file($file)){
                require_once("$file");
                }
            else{
                require_once("main.php");
                }
            ?>
      </div>
    </section>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017 </p>
        <p class="m-0 text-center text-white">Edit By. Sukrit Panyacom CIS</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
  </body>

</html>
