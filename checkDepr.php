<?php

require_once dirname (__FILE__).'/connect.php';
			
			

				$name_tex = $_POST['name_text'];			
				$depr = mysqli_query($con,"SELECT depr FROM menu WHERE name = '$name_tex'");
				$depr_fetch = mysqli_fetch_array($depr,MYSQLI_NUM);
				$ifDepr = $depr_fetch[0];
				
				echo $ifDepr;
				

			
			
		
	