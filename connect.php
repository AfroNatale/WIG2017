<?php
session_start();
$con = mysqli_connect("localhost","serwisowa_macjej","speoklatvet1_DB_HY","serwisowa_wig2016") or die(mysql_error()."Nie mozna polaczyc sie z baza danych. Prosze chwile odczekac i sprobowac ponownie.");
mysqli_error($con);
?>