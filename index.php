<?php

	for($i = 1; $i < 100000; $i++) {
		
	}
	if(isset($_POST['answers'])) {
		// $post = json_decode($_POST['answers']);
		// print_r($post);
		echo $_POST['answers'];
	} else {
		echo json_encode(array("thanh" => "Nguyen", "aaa" => "aaaaaaaaa"));
	} 
	
?>