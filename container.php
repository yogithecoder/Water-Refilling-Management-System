<?php
	$cont_name = $_POST['cont_name'];
	$quantity = $_POST['quantity'];
	$on_hand = $_POST['on_hand'];
	$unit = $_POST['unit'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','water_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into container(cont_name, quantity, on_hand, unit_price) values(?, ?, ?, ?)");
		$stmt->bind_param("siii", $cont_name, $quantity, $on_hand, $unit);
		$execval = $stmt->execute();
		// echo $execval;
		if(isset($_POST["submit1"])){
			header("Location: public/containerTable.php");
		  }
		$stmt->close();
		$conn->close();
	}
?>