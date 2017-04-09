<?php
	require_once dirname (__FILE__).'/connect.php';
	
	$section_name = mysqli_query($con,"SELECT name FROM sections");
	$result = array();
	
	while($row = mysqli_fetch_array($section_name)){
		$result[] = $row[0];
		
		
	}
	echo json_encode($result);
?>