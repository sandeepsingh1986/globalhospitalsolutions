<?php

include('connection.php');

session_start();

/*
$sql = "INSERT INTO SignUp (id, firstname, lastname, email, password)
VALUES ('John', 'Doe', 'john@example.com')";
*/
	
// prepare and bind
$stmt = $conn->prepare("INSERT INTO contact (Firstname, Lastname, Email, Mobile, Message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss",$fname, $lname, $mail, $tel, $msg);

// set parameters and execute

$honeypot = $_POST["first"];

// $honeypot = "";

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$mail = $_POST["mail"];
$tel = $_POST["mobile_no"];
$msg = $_POST["msgtext"];	


$status = '';

if(! empty( $honeypot ) ){
return;	
}else{

if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
// Validation: Checking entered captcha code with the generated captcha code
if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0){
// Note: the captcha code is compared case insensitively.
// if you want case sensitive match, update the check above to strcmp()
$status = "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#FF0000;'>Entered captcha code does not match! Kindly try again.</span></p>";
	
header('Location:nothanks.php');	
}else{
$status = "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#46ab4a;'>Your captcha code is match.</span></p>";	

	
if($stmt->execute()){
    print 'Successfully inserted and Last inserted ID is : ' .$stmt->insert_id .'<br />'; 
}else{
    die('Error : ('. $conn->errno .') '. $conn->error);
}
echo " <br> ";

echo "New records created successfully";	
header('Location:thanks.php');
$stmt->close();
$conn->close();	
}	
	
	
	
	
}
}

echo $status;




/*
if($stmt->execute()){
    print 'Successfully inserted and Last inserted ID is : ' .$stmt->insert_id .'<br />'; 
}else{
    die('Error : ('. $conn->errno .') '. $conn->error);
}
echo " <br> ";

echo "New records created successfully";	
header('Location:thanks.php');
$stmt->close();
$conn->close();	
}

else{
header('Location:contact1.php');	
*/
?>