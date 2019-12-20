<!DOCTYPE html>
<body>
<center>
<fieldset>
<legend>IMG viewer</legend>

<!-- header Injection 

proof of concept : curl -i http://0 --header "host:example.com"   

-->
<img width="500" src="http://<?php echo $_SERVER['HTTP_HOST']?>/img.png" >
</fieldset>
</center>
</body>
</html>