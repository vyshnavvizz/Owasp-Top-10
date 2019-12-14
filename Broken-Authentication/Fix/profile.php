<?php
session_start();  
if($_SESSION['admin'] == TRUE){ 

    echo "Hello, Admin"; 
    exit; 

}else{
 
	echo "Hello, Guest";

}?> 