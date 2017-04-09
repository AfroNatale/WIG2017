<?php

require_once dirname (__FILE__).'/connect.php';
			
			
			
			$getDel = $_POST['getDel'];
			$getSecDel = $_POST['getSecDel'];
			
			$result = array();
			
			
				$getId = mysqli_query($con,"SELECT id FROM sections WHERE name = '$getSecDel'");
				$getId_fetch = mysqli_fetch_array($getId,MYSQLI_NUM);
				$id = $getId_fetch[0];
				$delMenu  = mysqli_query($con,"delete FROM menu WHERE name = '$getDel'");
				
				 

				 echo  'succ';
				
			
			
		
	