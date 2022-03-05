<?php
	$cust_id = $_POST['cust_id'];
	$prod_id = $_POST['prod_id'];
	$cont_id = $_POST['cont_id'];
	$unit = $_POST['unit'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','water_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into delivery(cust_id, prod_id, cont_id, unit_price) values(?, ?, ?, ?)");
		$stmt->bind_param("iiii", $cust_id, $prod_id, $cont_id, $unit);
		$execval = $stmt->execute();
		// echo $execval;
		if(isset($_POST["submit1"])){
			header("Location: public/deliveryTable.php");
		  }
		$stmt->close();
		$conn->close();
	}
?>