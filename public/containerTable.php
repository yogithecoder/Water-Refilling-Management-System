<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body style="background:#e6e6e6;color:black;">

<div class="w3-sidebar w3-light-grey w3-card-4 w3-animate-left" style="width: 180px; display: none;" id="mySidebar">
      <div class="w3-bar primary">
      <a href="../index.php" class="ho"><span class="w3-bar-item w3-padding-16"><i class="fas fa-tachometer-alt"></i> Dashboard </span></a>
      <button onclick="w3_close()" class="w3-bar-item w3-button w3-right w3-padding-16" title="close Sidebar"><i class="fa fa-times" aria-hidden="true"></i>
      </button>
      </div>
      <div class="w3-bar-block">
        
      <div class="w3-dropdown-hover">
          <a class="w3-button cc" href="../Customer.html">Customers <i class="fa fa-caret-down"></i></a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a class="w3-bar-item w3-button" href="../Customer.html">New Customer</a>
            <a class="w3-bar-item w3-button" href="customerTable.php">Records</a>
          </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="../Product.html">Products <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="../Product.html">New Product</a>
          <a class="w3-bar-item w3-button" href="productTable.php">Records</a>
        </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="../Container.html">Containers <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="../Container.html">New Container</a>
          <a class="w3-bar-item w3-button" href="containerTable.php">Records</a>
        </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="../Delivery.html">Deliveries <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="../Delivery.html">New Order</a>
          <a class="w3-bar-item w3-button" href="deliveryTable.php">Records</a>
        </div>
      </div>
      
      </div>
    </div>
<div id="main" class="container" style="padding-top: 50px;">
<span title="open Sidebar" style="display: inline-block;" id="openNav" class="w3-button w3-transparent w3-display-topleft w3-xlarge" onclick="w3_open()">&#9776;</span>
<h1 class="tab-head">Containers</h1>
  <div style = "padding-bottom:5px;">
      <button class="btn w3-green"><a href="../Container.html"><i class="fa fa-plus"></i> Add Container</a></button>
  </div> 
<table>
    <tr>
    <th>Container ID</th>
    <th>Container Name</th>
    <th>Quantity(ltr.)</th>
    <th>On hand</th>
    <th>Unit Price</th>
    <th>Action</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "water_db");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT cont_id, cont_name, quantity, on_hand, unit_price FROM container";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
      <tr>
      <td><?php echo $row["cont_id"] ?></td>
      <td><?php echo $row["cont_name"] ?></td>
      <td><?php echo $row["quantity"] ?></td>
      <td><?php echo $row["on_hand"] ?></td>
      <td><?php echo $row["unit_price"] ?></td>
      <td><span class="btn btn-danger" style = "color: white;">
      <a href = "containerTable.php?delete=<?php echo $row["cont_id"]; ?>" onclick = "return confirm('Are you sure ?');">Delete</a>
      </span>
      </td>
    </tr>
    <?php
    }
    if(isset ($_GET['delete']) ){
      $delete_id = $_GET['delete'];
      
      // $sql2 = "DELETE FROM customer WHERE cust_id = 'delete_id'";
      // $result = $conn ->query($sql2);
      mysqli_query($conn,"DELETE FROM container WHERE cont_id = '". $delete_id ."'");
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT = "0; URL = http://localhost/water_db/public/containerTable.php">
      <?php
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
</div>


<script>
      function w3_open() {
        document.getElementById("main").style.marginLeft = "300px";
        document.getElementById("mySidebar").style.width = "300px";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
      }
      function w3_close() {
        document.getElementById("main").style.marginLeft = "98px";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
      }
</script>

</body>
</html>