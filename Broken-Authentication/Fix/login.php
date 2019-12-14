<?php 

if(isset($_POST['submit'])){
    session_start();
    $usr = ($_POST['username']); 
    $pwd = ($_POST['password']); 

    if($usr == "admin" AND $pwd == "admin"){ 

        $_SESSION['admin'] = TRUE; 
        header("Location: profile.php");
        exit; 

    }else{ 

        $_SESSION['admin'] = FALSE; 
        header("Location: profile.php"); 
        exit; 
    } 

}else{ 

    header("Location: index.php");     
    exit; 
} 

?>