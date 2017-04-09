<?php

require_once dirname (__FILE__).'/connect.php';

	$contentName = $_POST['contentName'];

	$rows = array();
	$rows2 = array();
	
	
	
	$section_id = mysqli_query($con,"SELECT id FROM sections WHERE name = '$contentName'");
	$section_id_fetch = mysqli_fetch_array($section_id,MYSQLI_NUM);
	$id = $section_id_fetch[0];
	
	$section_content = mysqli_query($con,"SELECT name,content FROM menu WHERE belong = '$id'");
	
	while($row = mysqli_fetch_array($section_content)){
		$rows[] = '<h3 id="'.preg_replace('/\s+/', '_', $row[0]).'">' .$row[0]. '</h3>';
		
		$rows[] = $row[1];
	}	
	$wholeString = implode("",$rows);
	
	echo htmlspecialchars_decode($wholeString);
	
?>

		
				 
				
			
			
		
	