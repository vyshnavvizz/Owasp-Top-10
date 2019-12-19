<!DOCTYPE html>
<body>
<center>
<fieldset>
<legend>Profile</legend>
</br>
<?php  
if(isset($_COOKIE['user'])){ 
    echo "Hello,{$_COOKIE["user"]}!";  
}else{
	echo "Hello, Guest!";
}?>
<br><br><a href="/profile.php">Edit Username</a>
</fieldset>
</center>
</body>
</html>