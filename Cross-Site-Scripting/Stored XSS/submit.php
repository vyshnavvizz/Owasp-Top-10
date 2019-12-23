<?php 
if(isset($_POST['submit'])){
    $name = ($_POST['username']);
    setcookie(user,$name);
    header("Location: index.php"); 
    exit;
}else{ 
    header("Location: index.php");     
    exit; 
} 
?>