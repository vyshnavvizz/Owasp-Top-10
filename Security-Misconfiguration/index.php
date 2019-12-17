<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>DashBoard</legend>
<center>
<?php
function checkLogin() {
	header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Invaild Login';
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER'])) {
	checkLogin();
} else {
	if($_SERVER['PHP_AUTH_USER'] == "admin" AND $_SERVER['PHP_AUTH_PW'] == "admin"){
		echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
	}else{
		checkLogin(); 
	}
}
?>
</center>
</fieldset>
</body>
</html>