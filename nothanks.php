<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Thank you page</title>
	
	

	
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">	
	
<link href="styles/para.css" rel="stylesheet" type="text/css">	
<link href="styles/layout.css" rel="stylesheet" type="text/css">
<link href="styles/style.css" rel="stylesheet" type="text/css">	
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	

	
</head>

<body>
	
<div class="header" id="myHeader">

<a href="index.php" class="logo"><img src="images/logo.png" alt="logo" width="120" height="100"></a>
<div class="header-right-info">
<br>	
<a href="tel:9354859566" class=“phone”><img src="images/phone.png">9354859566</a><br><br>
<a href="mailto:info@globalhospitalsolutions.com" target="_blank" class=“phone”><img src="images/email.png">info@globalhospitalsolutions.com</a>
</div>
	
</div>
	
	
	<p style="font-family:verdana;font-size:300%;border:4px white;padding:90px;margin:20px;color:green;">Entered captcha code does not match! Kindly try again.</p>

	
<?php 
	
	include('footer.php');

	?>		

	
	<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>	
	
	
	
	</body>
</html>
