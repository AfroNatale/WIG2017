<?php

require_once dirname (__FILE__).'/connect.php';
			
			
			
			$getDel = $_POST['getDel'];
			
			$result = array();
			
			
				$getId = mysqli_query($con,"SELECT id FROM sections WHERE name = '$getDel'");
				echo mysqli_error($con);
				$getId_fetch = mysqli_fetch_array($getId,MYSQLI_NUM);
				$id = $getId_fetch[0];
				
				
				$delMenu  = mysqli_query($con,"delete FROM menu WHERE belong = $id");
				$delSect  = mysqli_query($con,"delete FROM sections WHERE name = '$getDel'");
				

				 echo  'succ';
				
			
			
		
	