<?php

require_once dirname (__FILE__).'/connect.php';
			
			

			$loginD = $_POST['loginD'];
			$passD = $_POST['passD'];
			$loginD = addslashes($loginD);
			$loginD= htmlspecialchars($loginD);
			$passD = addslashes($passD);
			$passD= htmlspecialchars($passD);
			
				$exists = mysqli_query($con,"SELECT * FROM users WHERE login = '$loginD' AND password = '$passD' ");
				$row_cnt = $exists->num_rows;

				 
				if ($row_cnt != 0) {			
				echo 'succ';
				
				
			}
			else echo 'failed';
			
			
		
	