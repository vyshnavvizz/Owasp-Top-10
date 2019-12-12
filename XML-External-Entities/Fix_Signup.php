<?php
libxml_disable_entity_loader(true);
$xmlfile = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
$info = simplexml_import_dom($dom);
$email = $info->email;
$password = $info->password;
echo "$password";
echo "$email";
?>