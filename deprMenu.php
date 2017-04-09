<?php

require_once dirname (__FILE__).'/connect.php';
			
			

				$getDep = $_POST['getDep'];			
				$depr = mysqli_query($con,"SELECT depr FROM menu WHERE name = '$getDep'");
				$depr_fetch = mysqli_fetch_array($depr,MYSQLI_NUM);
				$ifDepr = $depr_fetch[0];
				
				if ($ifDepr == 1){
				$chDepr1 = mysqli_query($con,"UPDATE menu SET depr = 0 WHERE name = '$getDep'");
				echo '1';
				}
				else{
				$chDepr2 = mysqli_query($con,"UPDATE menu SET depr = 1 WHERE name = '$getDep'");
				echo '0';
				}
				

			
			
		
	