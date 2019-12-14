<?php 

if(isset($_POST['submit'])){

    $usr = ($_POST['username']); 
    $pwd = ($_POST['password']); 

    if($usr == "admin" AND $pwd == "admin"){ 

        setcookie(admin,TRUE);  
        header("Location: profile.php");
        exit; 

    }else{ 
        setcookie(admin,FALSE);
        header("Location: profile.php"); 
        exit; 
    } 

}else{ 

    header("Location: index.php");     
    exit; 
} 

?>