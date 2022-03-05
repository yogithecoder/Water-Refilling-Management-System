<?php
$conn = mysqli_connect("localhost", "root", "", "water_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
  $cid = $_GET['cid'];
  $fn = $_GET['fn'];
  $ln = $_GET['ln'];
  $ad = $_GET['ad'];
  $ph = $_GET['ph'];
  $ag = $_GET['ag'];
  $cd = $_GET['cd'];
  $ct = $_GET['ct'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Update Page</title>
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/custom.css">
    
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
            <a class="w3-bar-item w3-button" href="../Customer.html">New Customer</a>
            <a class="w3-bar-item w3-button" href="customerTable.php">Records</a>
          </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="Product.html">Products <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="../Product.html">New Product</a>
          <a class="w3-bar-item w3-button" href="productTable.php">Records</a>
        </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="Container.html">Containers <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="../Container.html">New Container</a>
          <a class="w3-bar-item w3-button" href="containerTable.php">Records</a>
        </div>
      </div>

      <div class="w3-dropdown-hover">
        <a class="w3-button cc" href="Delivery.html">Deliveries <i class="fa fa-caret-down"></i></a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a class="w3-bar-item w3-button" href="../Delivery.html">New Order</a>
          <a class="w3-bar-item w3-button" href="deliveryTable.php">Records</a>
        </div>
      </div>
      
      </div>
    </div>

    <div id = "main" class="container">
      <span title="open Sidebar" style="display: inline-block;" id="openNav" class="w3-button w3-transparent w3-display-topleft w3-xlarge" onclick="w3_open()">&#9776;</span>
      <div class="row col-md-6 col-md-offset-3" style=" padding-top: 50px;">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Update Information</h1>
          </div>
          <div class="panel-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                  value = "<?php echo $fn ?>"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                  value = "<?php echo $ln ?>"
                />
              </div>
              
              <div class="form-group">
                <label for="address">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  name="address"
                  value = "<?php echo $ad ?>"
                />
              </div>
              
              <div class="form-group">
                <label for="phone">Phone no.</label>
                <input
                  type="number"
                  class="form-control"
                  id="phone"
                  name="phone"
                  value = "<?php echo $ph ?>"
                />
              </div>

              <div class="form-group">
                <label for="age">Age</label>
                <input
                  type="number"
                  class="form-control"
                  id="age"
                  name="age"
                  value = "<?php echo $ag ?>"
                />
              </div>
              <div class="form-group">
                <label for="date">Date</label>
                <input
                  type="date"
                  class="form-control"
                  id="date"
                  name="date"
                  value = "<?php echo $cd ?>"
                />
                <div class="form-group">
                    <label for="time">Time</label>
                    <input
                      type="time"
                      class="form-control"
                      id="time"
                      name="time"
                      value = "<?php echo $ct ?>"
                    />
              </div>
              <input type="submit" class="btn btn-primary" name = "update" value = "Update Details"/>
            </form>
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
        document.getElementById("main").style.marginLeft = "174px";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
      }
      </script>

  </body>
</html>
<?php
  if(isset($_POST["update"]))
  {
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $add = $_POST["address"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $query = "UPDATE customer SET firstName='" .$fname."',lastName='".$lname."', address='" .$add."',phone = '" .$phone."', 
              age='" .$age. "', c_date = '" .$date. "', c_time='" . $time ."' WHERE cust_id = '" .$cid."'";
    
    $data = mysqli_query($conn,$query);

    if($data){
      echo"<script>alert('Record Updated')</script>";
      
      ?>
      <META HTTP-EQUIV="Refresh" CONTENT = "0; URL = http://localhost/water_db/public/customerTable.php">
      <?php
    }else{
      echo "Failed to Update Record";
    }   

    
  }
?>