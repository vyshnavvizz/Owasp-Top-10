<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>User Info</legend>
<center>
<?php
if(isset($_GET['user']) OR isset($_GET['password'])){ 
	$username = $_GET['user'];
	$password = $_GET['password'];
	if($username == "Manu" ){ 
		echo "Email : Manu@example.org";
			if($password == "true"){
       		 echo "</br> Password : Hello@123";}}
 	elseif($username == "Alvin"){
 		echo "Email : Alvin@example.org";
 			if($password == "true"){
 				echo "</br> Password : qwerty@7890";
		}}
	else{
		echo "User Not Found";
	}}
else{
	echo "Error : 204";
}
?> 
</center>
</fieldset>
</body>
</html>