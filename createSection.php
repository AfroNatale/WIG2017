<?php

require_once dirname (__FILE__).'/connect.php';
			
			

			$name = $_POST['name'];
			$belongName = $_POST['afterName'];
			
			
			$exists = mysqli_query($con,"SELECT * FROM sections WHERE name = '$name' ");
			$row_cnt = $exists->num_rows;

				 
				if ($row_cnt == 0) {
				$afterAdd = mysqli_query($con,"SELECT order_section FROM sections WHERE name = '$belongName' ");
				$after_name_fetch = mysqli_fetch_array($afterAdd,MYSQLI_NUM);
				$id = $after_name_fetch[0];
				$id2 = $id+1;
				
				
				$increment_row = mysqli_query($con,"UPDATE sections SET order_section = order_section + 1 WHERE order_section > $id2"); 
					while($row = mysqli_fetch_array($increment_row)){
						$rows[] = $row;
					}	
	
					
				
				mysqli_query($con,"INSERT INTO `sections` (name, order_section) VALUES('$name', '$id')");
				echo 'succ';
			}
			else{
			echo 'exist';
			}
		
	