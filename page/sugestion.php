<?php
	
	$existingNames = array("Evan", "ENovi", "ESapu","Evanny" );
	// echo("<script>alert('Semangat451')</script>");

	if(isset($_POST['sugestion'])){
		$name = $_POST["sugestion"];
		
		echo("<script>alert('Samehadaku')</script>");

		foreach ($existingNames as $existingName) {
			if(strpos($existingName, $name) !== false){
				echo $existingName;
				echo "<br>";
			}
		}

	}
?>