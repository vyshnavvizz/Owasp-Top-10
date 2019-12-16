<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>DashBoard</legend>
<center>
<?php

if(isset($_GET['debug'])){ 
	$debug = $_GET['debug'];
	if($debug == "true" ){ 
			if($_COOKIE['admin']== TRUE){
       		 print phpinfo();
			}else{
				echo "yoU are Not Admin";
	}}
}else{
	echo "Status : Online";
}
?> 
</center>
</fieldset>
</body>
</html>