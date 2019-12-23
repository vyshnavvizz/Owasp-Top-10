<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>Profile</legend>
<center>
<?php
if(isset($_GET['user'])){ 
	$username = $_GET['user'];
	echo "Hello, {$username}!";  
}else{
	echo "Hello,Guest!";
}
?> 
</center>
</fieldset>
</body>
</html>