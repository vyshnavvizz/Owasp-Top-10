<?php
if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['access.log'])){
        header( 'HTTP/1.1 403 Forbidden');
        die( header( 'location: /' ) );
    }
?>
<!DOCTYPE html>
<html>
<body>
<fieldset>
<legend>DashBoard</legend>
<center>
Status : Online
<?php

    $log  = "IP: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.'';
    file_put_contents('./access.log', $log, FILE_APPEND);

?> 
</center>
</fieldset>
</body>
</html>
