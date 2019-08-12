<?php
	session_start();
	if (!isset($_SESSION['id']) && !isset($_SESSION['first_name']))
	{
		echo "Error connecting to the profile page";
		header('Location: signin.html');
		#header("Location: index.html");
	}
	// include 'db.php';
	
	// if (isset($_POST['username'])&&isset($_POST['password']))
	// {
	// 	echo ($_POST['username']);
	// }
?>

<?php
  include 'db.php';
?>


<?php

  $status = ['0', '0', '0', '0', '0', '0', '0', '0', '0', '0'];
  for($i=1 ; $i<10 ; $i++){
    $query = "SELECT * FROM appliances WHERE id=$i ";
    $res = mysqli_query($con, $query);
    if($res)
    {
      $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
      if($row['status']==1)
      {
        $status[$i-1]='HIGH';
      }
      else
      {
        $status[$i-1]='LOW';
      }
    }
  }
?>


<!DOCTYPE html>

<html lang="en">

<head>

  <title>Cyborg- Room Automation</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>


<body style="background-color:#90a3c5;">

<div class="row">

<div class="container-fluid">

	<nav class="navbar" style="background-color:black">

		<div class="container-fluid">
		<div class="nav navbar-nav navbar-left">
			<h1 style="color:white"><b>CYBORG</b></h1>
		</div>

    <div class="nav navbar-nav navbar-center">
      <h1 style="color:white">ROOM AUTOMATION</h1>
    </div>

		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item text-white"><a href="logout.php">LOGOUT</a></li>
		

		</ul>

	</div>

	</nav>

   
</div>

</div>
<br>
<div class="well container text-center"><h4>Hello..<?php echo $_SESSION['first_name']; ?></h4></div>
<br>





<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="card container text-center">
        <h2 style="text-align: center;">Light</h2><br>
        <p>
          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=1'">Light 1</button>
          <label>&nbsp; Status: <?php echo $status[0]; ?></label>
          <br>
          <br>
          <br>

          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=2'">Light 2</button>
          <label>&nbsp; Status: <?php echo $status[1]; ?></label>
          <br>
          <br>
          <br>

          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=3'">Light 3</button>
          <label>&nbsp; Status: <?php echo $status[2]; ?></label>
          <br>
          <br>
          <br>
        </p>
      </div>
          <br>
    <br>
    </div>


    <div class="col-md-4">
      <div class="card container text-center">
        <h2 style="text-align: center;">Fan</h2><br>
        <p>
          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=4'">Fan 1</button>
          <label>&nbsp; Status: <?php echo $status[3]; ?></label>
          <br>
          <br>
          <br>

          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=5'">Fan 2</button>
          <label>&nbsp; Status: <?php echo $status[4]; ?></label>
          <br>
          <br>
          <br>

          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=6'">Fan 3</button>
          <label>&nbsp; Status: <?php echo $status[5]; ?></label>
          <br>
          <br>
          <br>
        </p>
      </div>
          <br>
    <br>
    </div>


    <div class="col-md-4">
      <div class="card container text-center">
        <h2 style="text-align: center;">Workstation</h2><br>
        <p>
          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=7'">Workstation 1</button>
          <label>&nbsp; Status: <?php echo $status[6]; ?></label>
          <br>
          <br>
          <br>

          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=8'">Workstation 2</button>
          <label>&nbsp; Status: <?php echo $status[7]; ?></label>
          <br>
          <br>
          <br>

          <button type="button" class="btn btn-info" onclick="window.location = 'update.php?id=9  '">Workstation 3</button>
          <label>&nbsp; Status: <?php echo $status[8]; ?></label>
          <br>
          <br>
          <br>
        </p>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid col-md-12">
  <img src="smarthome.jpg" style="display: block; margin-left: auto; margin-right: auto; width: 70%; height: 50%">
</div>
<br>
<br>
<br>
<br>



<footer>
		<div class="container-fluid" style="background-color:black">

		
			<div class="col-md-12 text-center">
          <center>
        <h5 style="color:white">FOLLOW US
          <a href="https://www.facebook.com/cyborg.nitr/?ref=aymt_homepage_panel" target="_blank"><img src="http://sundevilgymnastics.com/wp-content/uploads/2016/11/FB-Icon.png" height="25px" width="25px"></a>
          </h5>
      
   
			<!-- <div class="col-md-12 text-center"> -->
        <p style="color:white">Copyright &copy; Cyborg NITR<br>National Institute Of Technolgy Rourkela</p>	
			</center>
      </div>
		
		</div>
	</footer>
  	</div>

	<script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <!-- <script src="dist/js/custom.min.js"></script> -->
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
    <script src="dist/js/cert_form.js"></script>
</body>
</html>