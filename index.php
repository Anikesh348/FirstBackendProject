<?php
require_once('ATGcontroller.php');
?>
<?php

if(isset($_POST)){


	$location 		= $_POST['location'];


		$sql = "INSERT INTO users (location) VALUES(?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$location]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
