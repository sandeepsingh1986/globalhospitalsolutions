<!doctype html>
<html>
<head>
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179040929-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179040929-1');
</script>
    
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3HBD73');</script>
<!-- End Google Tag Manager -->    

<meta charset="UTF-8">
<title>contactus</title>


	
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">	
	
<link href="styles/para.css" rel="stylesheet" type="text/css">	
<link href="styles/layout.css" rel="stylesheet" type="text/css">
<link href="styles/style.css" rel="stylesheet" type="text/css">	

<!-- Meta is used to make the page responsive, the width will match with the device width, the first time the browser loads the page the zoom will be 100%, maximum-scale=1.0, user-scalable=0 ---doesn't zoom it for the user -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	



<!-- Convertful Code -->
<script id="convertful-api" src="https://app.convertful.com/Convertful.js?owner=32053" async></script>
<style>	
.hide-robot{
			display:none;
		}
div{
	font-size:20px;
}	
</style>
</head>

<body>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3HBD73"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php

include('connection.php');

session_start();
// sql to create table
$sql = "CREATE TABLE contact (
Firstname  VARCHAR(100),
Lastname VARCHAR(100),
Email VARCHAR(100),
Mobile VARCHAR(20),
Message VARCHAR(400)
)";
	
/*	
if ($conn->query($sql) === TRUE) {
  echo "Table contact created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/	
$conn->close();
?>	

<div class="header" id="myHeader">

   <a href="index.php" class="logo"><img src="images/logo.png" alt="logo" width="120" height="100"></a>
	<div class="header-right-info">
	 <br>	
	  <a href="tel:9354859566" class=“phone”><img src="images/phone.png">9354859566</a><br><br>
     <a href="mailto:info@globalhospitalsolutions.com" target="_blank" class=“phone”><img src="images/email.png">info@globalhospitalsolutions.com</a>
    </div>
	
</div>

	

<img src="images/contact.png" alt="contactus" class="imagecontact">	


<h1 >Give Us A Message</h1>

<div class="container1">
		
<form name="form3" action="process.php" method="post" enctype="multipart/form-data">

	
<div class="row">
 <div class="col-25">	
  <label>Enter your First Name:<span style="color:red"> * </span></label>	
 </div>	
 <div class="col-75">
  <input type="text" name="firstname" required/>
 </div>	 
</div>	
	
<!-- Create fields for the honeypot -->
<!-- <input name="first" type="text" id="first" autocomplete="off" tabindex="-1" class=hide-robot> -->
<!-- honeypot fields end -->	

<!-- use this for local machine-->
<input name="first" type="text" id="first" autocomplete="off" tabindex="-1" placeholder="This field is entered by a spammer">
<!-- local machine text end -->	




<div class="row">
 <div class="col-25">	
  <label>Enter your Last Name:<span style="color:red"> * </span></label>	 
 </div>	
 <div class="col-75">
  <input type="text" name="lastname" required/>
 </div>	 
</div>	  

<div class="row">
 <div class="col-25">	
  <label>Enter your email id:<span style="color:red"> * </span></label>	
 </div>	
 <div class="col-75">
  <input type="email" name="mail" required/>
 </div>	 
</div>
	  
<div class="row">
 <div class="col-25">	
  <label>Enter your mobile number:</label>	
 </div>	
 <div class="col-75">
  <input type="tel" name="mobile_no">
 </div>	 
</div>	  

<div class="row">
 <div class="col-25">	
  <label for="msgtext">Enter your message:</label>	
 </div>	
 <div class="col-75">
  <textarea id="msgtext" name="msgtext" rows="5" cols="70"></textarea>	
 </div>	 
</div>	  
	
<br>	  


<br>
	  
	
<div class="row">	
 <div class="col-25">	
  <label><strong>Enter Captcha:</strong><span style="color:red"> * </span></label><br />
 </div>	
 <div class="col-25">		
  <input type="text" name="captcha" required/>
 </div>	 
<div class="col-75">		
	<p><br /><img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'></p>
<p>Can't read the image? <a href='javascript: refreshCaptcha();'>click here</a> to refresh</p>	
</div>	
</div>	
	
<div class="row">
 <input type="reset">	  
</div>
	  
	
	
<br>	  
<div class="row">
  <button type="submit" value="SUBMIT">Click to Submit</button>	  
</div>	  
	  
 </form>	
</div>	

	

<br><br>	
<?php 
	
	include('footer.php');

	?>		

<script>
//Refresh Captcha
function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

	
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
	
<!-- Default Statcounter code for
Globalhospitalsolutions.com
http://globalhospitalsolutions.com -->
<script type="text/javascript">
var sc_project=11406784; 
var sc_invisible=0; 
var sc_security="c5d28400"; 
var scJsHost = "https://";
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="https://statcounter.com/" target="_blank"><img
class="statcounter"
src="https://c.statcounter.com/11406784/0/c5d28400/0/"
alt="Web Analytics"></a></div></noscript>
<!-- End of Statcounter Code -->	
	
	
</body>
</html>


