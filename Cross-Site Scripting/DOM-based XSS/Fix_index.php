<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>Profile</legend>
<center>
<p id="username">Hello, guest!</p>
<script>

	<?php if(isset($_GET['user'])){$username = htmlspecialchars($_GET['user']);echo "var username = '{$username}'";} ?>

	if (username !== null) {
		document.getElementById('username').innerHTML = 'Hello, ' + username + '!';
	}
</script>
</center>
</fieldset>
</body>
</html>