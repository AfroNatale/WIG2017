<?php   
session_start(); 
session_destroy();
header("location:/wig2016/index.html"); 
exit();
?>