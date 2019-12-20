<?php
$hosts = array('0.0.0.0', 'localhost');
if(!isset($_SERVER['HTTP_HOST']) || !in_array($_SERVER['HTTP_HOST'], $hosts)) {
    header($_SERVER['SERVER_PROTOCOL'].' 400 Bad Request');
    exit;
   }

?>
<!DOCTYPE html>
<body>
<center>
<fieldset>
<legend>IMG viewer</legend
<img width="500" src="http://<?php echo $_SERVER['HTTP_HOST']?>/img.png" >
</fieldset>
</center>
</body>
</html>

