<?php

require_once dirname (__FILE__).'/connect.php';
			
			

			$menuName = $_POST['menuName'];
			$belongName = $_POST['belongName'];
			$content = $_POST['content'];
			echo $belongName;

			
			$rows = array();
			
			$getId = mysqli_query($con,"SELECT id FROM sections WHERE name =  '$belongName'");

			mysqli_error($con);
			$getId = mysqli_fetch_array($getId); 
			$getId = $getId[0];
		

			mysqli_query($con,"INSERT INTO menu (name, belong, content) VALUES ('$menuName', '$getId', '$content')");
			
			echo 'succ';
			
			
		
	