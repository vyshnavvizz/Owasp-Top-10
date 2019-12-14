<?php  
if($_COOKIE['admin'] == TRUE){ 

    echo "Hello, Admin"; 
    exit; 

}else{
 
	echo "Hello, Guest";

}?> 