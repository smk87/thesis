<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!--<link rel="stylesheet" type="text/css" href="a.css">-->

    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 2px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
    
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>


<!--<div class="navbar">
  <a href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Dashboard</a>
      <a href="#">Fees</a>
      <a href="#">Payments</a>
    </div>
  </div>
  <a href="index.php?logout='1'">Logout</a>
</div>-->

     class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index_a.php">Welcome</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index_a.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Bills</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="usf.php">Add Student Fees</a>
            </li>
            <li>
              <a href="csf.php">Update Student Fees</a>
            </li>
            <li>
              <a href="vsf.php">View Student Fees</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Student Base</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="usi.php">Update Student Info</a>
            </li>
            <li>
              <a href="vsi.php">View Student Info</a>
            </li>
          </ul>
        </li>


      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapselink" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Links</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapselink">
            <li>
              <a href="https://mist.ac.bd/">MIST</a>
            </li>
            <li>
              <a href="https://ems.mist.ac.bd/">EMS</a>
            </li>
          </ul>
        </li>


      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a href="index_a.php?logout='1'" style="color: red;">Logout
            <i class="fa fa-fw fa-sign-out"></i></a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item">View Student Info</li>
      </ol>
         <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['name']; ?></strong></p>
    	<p> <a href="index_a.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
      <!-- Icon Cards-->
      
      <div class="row">
        <div class="container">

  <div class="container">
	<div class="row">
		<div class="col-md-1 ">
		     
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            
		            <div class="row">
		                <div class="col-md-12">
                        <?php 
                             /* Attempt MySQL server connection. Assuming you are running MySQL
          server with default setting (user 'root' with no password) */
          $mysqli = new mysqli("localhost", "root", "", "th");

          // Check connection
          if($mysqli === false){
              die("ERROR: Could not connect. " . $mysqli->connect_error);
          }

          // Escape user inputs for security
          $id = $mysqli->real_escape_string($_REQUEST['sid']);


          //Printing values
          $t1=5;
          $tid=$_SESSION['username'];
          $q="SELECT std_name,std_id,std_dep,std_email,lvl,term,latetuition,latefine,latehall,latemess FROM student WHERE std_id='$id'";
          $r=mysqli_query($mysqli,$q);
          while($row=mysqli_fetch_array($r)){
                        ?>
                    <div class="row">
		                <div class="col-md-12">
		                    <h4><?php echo  $row['std_name'] ?>'s Profile</h4>
		                    <hr>
		                </div>
		            </div>

		                    <form>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Student ID</label> 
                                <div class="col-8">
                                  <input id="username" name="username"  value="<?php echo $row['std_id']; ?>"  class="form-control here" style="font-weight: bold;" disabled="disabled" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" value="<?php echo $row['std_name']; ?>" class="form-control here" style="font-weight: bold;" disabled="disabled" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Department</label> 
                                <div class="col-8">
                                  <input id="text" name="dep" value="<?php echo $row['std_dep']; ?>" class="form-control here" style="font-weight: bold;" disabled="disabled" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Level</label> 
                                <div class="col-8">
                                  <input id="text" name="lvl" value="<?php echo $row['lvl']; ?>" class="form-control here" style="font-weight: bold;" disabled="disabled" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Term</label> 
                                <div class="col-8">
                                  <input id="text" name="term" value="<?php echo $row['term']; ?>" class="form-control here" style="font-weight: bold;" disabled="disabled" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="email" name="email" value="<?php echo $row['std_email']; ?>" class="form-control here" style="font-weight: bold;" disabled="disabled" type="text">
                                </div>
                              </div>

                            </form>

                             <?php
            
            $dataPoints = array(
              array("label"=> "Late Tuition Fees", "y"=> $row['latetuition']),
              array("label"=> "Late Fines", "y"=> $row['latefine']),
              array("label"=> "Late Hall Bills", "y"=> $row['latehall']),
              array("label"=> "Late Mess Bills", "y"=> $row['latemess'])
            );
          }

          // Close connection
          $mysqli->close();
          //include 'chartcheck.php';
          ?>
          
          <!DOCTYPE HTML FOR Chart>
          <html>
          <head>  
          <script>
          window.onload = function () {
           
          var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            title:{
              text: "Numbers of Late Payments of This Student"
            },
            subtitles: [{
              text: ""
            }],
            data: [{
              type: "pie",
              showInLegend: "true",
              legendText: "{label}",
              indexLabelFontSize: 16,
              indexLabel: "{label} - #percent%",
              yValueFormatString: "#,##0",
              dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
          });
          chart.render();
           
          }
          </script>
          </head>
          <body>
          <br>
          <br>
          <div id="chartContainer" style="height: 370px; width: 100%;"></div>
          <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
          </body>
          </html>     

		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
    
	</div>
</div>
</div>

      </div>
        <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>





<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>


</div>

</body>
</html>