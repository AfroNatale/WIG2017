<?php
	require_once dirname (__FILE__).'/connect.php';
	
	$section_size = 0;
	$menu_size = 0;
	$rows = array();
	$rows2 = array();
	$result = array();
	$id_counter = 0;
	$ids = array();
	

	
	$section_id = mysqli_query($con,"SELECT id FROM sections ORDER BY order_section");
	while($row = mysqli_fetch_array($section_id)){
		$rows[] = $row;
	}	
	$section_size = sizeOf($rows);
	$section_size ++;
	
	
	for ($x = 1; $x < $section_size; $x++) {
		$currId = $rows[$id_counter][0];
	
		$section_name = mysqli_query($con,"SELECT name FROM sections WHERE id =  '$currId'");
		$section_name_fetch = mysqli_fetch_array($section_name,MYSQLI_NUM);
		$result[] = 'n: '.$section_name_fetch[0];
		
			$menu_id = mysqli_query($con,"SELECT name FROM menu WHERE belong = '$currId'");
			while($row2 = mysqli_fetch_array($menu_id)){
			$result[] = $row2[0];
			}			

		unset($rows2);
		unset($rows1);
		$id_counter++;
	}
	
	 echo json_encode($result);
	

	
	
	
	
	
	
	
	
	
	
	/*
	
	$rows = array();
	$rows2 = array();
	$result = array();
	$section_id = mysqli_query($con,"SELECT id FROM sections");
	while($row = mysqli_fetch_array($section_id)){
		$rows[] = $row;
	}	
	
	$section_size = sizeOf($rows);
	$section_names_loop = array();
	
	
	for ($x = 0; $x < $section_size; $x++) {
			$section_id_loop = $rows[$x][0];
			$section_name = mysqli_query($con,"SELECT name FROM sections WHERE id = $section_id_loop");
			$section_name_fetch = mysqli_fetch_array($section_name,MYSQLI_NUM);
			$section_names_loop[$x] = $section_name_fetch[0];

			$result[] = $section_names_loop[$x];
			//SPRAWDZA ILE JEST PUNKTÓW MENU W DANEJ SEKCJI 
				$how_many_menu = mysqli_query($con,"SELECT id FROM menu WHERE belong = $section_id_loop");
				while($row2 = mysqli_fetch_array($how_many_menu)){
				
				$rows2[] = $row2;
				
				}
				
				$how_many_menu_size = sizeOf($rows2);
				
				for ($y = 0; $y < $how_many_menu_size; $y++) {

					$menu_belong = mysqli_query($con,"SELECT name FROM menu WHERE belong = $section_id_loop");
					$menu_belong_fetch = mysqli_fetch_array($menu_belong,MYSQLI_NUM);
					$menu_belong_loop[$y] = $menu_belong_fetch[0];
					
					$result[] = $menu_belong_loop[$y];
					
			echo (' dodaje'.$menu_belong_loop[$y]);
				}
			unset($rows2);
				
		} 
	echo $result[6]; 
	*/

?>

		