<?php
$connect=mysql_connect('localhost','root',"");
if(!$connect){
		die("connection not established".mysql_error());
}
if(isset($_POST['submit']))
{
$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$msg = $_POST['msg'];
}
function test_input($test)
{
$test = stripslashes($test);
$test = trim($test);
$test = htmlspecialchars($test); 
return $test;
}
//mail("webmaster@example.com",$subject,$message,"From: $from\n");
mail("ashutosh11939@gmail.com",$name,$msg,"$email\n");
echo "Thank you for contacting us.";
header("location : index.html");
?>