<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/custom.css">
    
  </head>
  <body style="background:#e6e6e6;color:black;">

    <div class="w3-sidebar w3-light-grey w3-card-4 w3-animate-left" style="width: 180px; display: none;" id="mySidebar">
      <div class="w3-bar primary">
        <a href="index.php" class="ho"><span class="w3-bar-item w3-padding-16"><i class="fas fa-tachometer-alt"></i> Dashboard </span></a>
      <button onclick="w3_close()" class="w3-bar-item w3-button w3-right w3-padding-16" title="close Sidebar"><i class="fa fa-times" aria-hidden="true"></i>
      </button>
      </div>
      <div class="w3-bar-block">
        
      <div class="w3-dropdown-hover">
          <a class="w3-button cc" href="Customer.html">Customers <i class="fa fa-caret-down"></i></a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a class="w3-bar-item w3-button" href="Customer.html">New Customer</a>
            <a class="w3-bar-item w3-button" href="public/customerTable.php">Records</a>
          </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="Product.html">Products <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="Product.html">New Product</a>
          <a class="w3-bar-item w3-button" href="public/productTable.php">Records</a>
        </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="Container.html">Containers <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="Container.html">New Container</a>
          <a class="w3-bar-item w3-button" href="public/containerTable.php">Records</a>
        </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="Delivery.html">Deliveries <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="Delivery.html">New Order</a>
          <a class="w3-bar-item w3-button" href="public/deliveryTable.php">Records</a>
        </div>
      </div>
      <a class="w3-bar-item w3-button w3-red" href="login.html"><b>Log out</b></a>
      </div>
    </div>

    <div id = "main" class="container" style = "margin-left:173px;">
      <span title="open Sidebar" style="display: inline-block;" id="openNav" class="w3-button w3-transparent w3-display-topleft w3-xlarge" onclick="w3_open()">&#9776;</span>
      <div class="" style=" padding-top: 50px;">
        <p class="tab-head" style="font-size: 45px;"><i class="fad fa-raindrops" style="font-size: 50px;"></i> Water Refilling Management System</p>
      </div>
      <div style ="padding-top:20px;">
      <h1 style="font-size: 32px;"><i class="fas fa-tachometer-alt"></i> <strong>Dashboard :</strong></h1>
      </div>
      
      <div style ="padding-top:15px;"class="row">
      <div class="col">
        <div class="w3-card w3-green count">
          <h1 class="count">Total Customer</h1>
          <div class="cnum">
          <?php
             $connection = mysqli_connect("localhost","root","","water_db"); 

            $query = "SELECT cust_id FROM customer ORDER BY cust_id";
            $query_run = mysqli_query($connection, $query);

            $row = mysqli_num_rows($query_run);
            echo '<h1 class="cnum"> ' .$row. '</h1>'

          ?>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="w3-card w3-green count">
          <h1 class="count">Total Products</h1>
          <div class="cnum">
          <?php
             $connection = mysqli_connect("localhost","root","","water_db"); 

            $query = "SELECT prod_id FROM product ORDER BY prod_id";
            $query_run = mysqli_query($connection, $query);

            $row = mysqli_num_rows($query_run);
            echo '<h1 class="cnum"> ' .$row. '</h1>'

          ?>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="w3-card w3-green count">
          <h1 class="count">Total Orders</h1>
          <div class="cnum">
          <?php
             $connection = mysqli_connect("localhost","root","","water_db"); 

            $query = "SELECT del_id FROM delivery ORDER BY del_id";
            $query_run = mysqli_query($connection, $query);

            $row = mysqli_num_rows($query_run);
            echo '<h1 class="cnum"> ' .$row. '</h1>'

          ?>
          </div>
        </div>
      </div>
      </div>
  </div>

    <script>
      function w3_open() {
        document.getElementById("main").style.marginLeft = "300px";
        document.getElementById("mySidebar").style.width = "300px";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
      }
      function w3_close() {
        document.getElementById("main").style.marginLeft = "173px";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
      }
      </script>

  </body>
</html>