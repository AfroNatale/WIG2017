<?php

require_once dirname (__FILE__).'/connect.php';
			
			

			$login = $_POST['login'];
			$pass = $_POST['pass1'];
			$login = addslashes($login);
			$login= htmlspecialchars($login);
			$pass = addslashes($pass);
			$pass= htmlspecialchars($pass);
			
				$exists = mysqli_query($con,"SELECT * FROM users WHERE login = '$login' ");
				$row_cnt = $exists->num_rows;

				 
				if ($row_cnt == 0) {
				mysqli_query($con,"INSERT INTO `users` (login, password) VALUES('$login', '$pass')");
				
				echo 'succ';
				
				
			}
			else echo 'exist';
			
			
		
	