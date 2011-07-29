<?php
	$address = "http://localhost:8080";
	echo strpos($address,"://");
	// zero based count. returns 4, the position of the first char of the needle
	echo "<br/>";
	
	if(isset($_GET['test'] )) {
		echo "isset";
	}else{
		echo "is not set";
	}
?>
	<form action="?test" method="POST"> 
		<button>TEST ME</button>
	</form>
	

