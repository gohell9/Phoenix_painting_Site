<?php 
function is_login(){ 
     if(isset($_SESSION['user'])){ 
     		return TRUE; 
     }else{ 
     		return FALSE; 
     } 
} 
?> 