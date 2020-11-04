<!DOCTYPE HTML>
<?php
session_start();
require_once("config.php");
echo '<script>console.log("current user: '.$_SESSION['student_user'].'")</script>';
echo '<script>console.log("current user: '.$_SESSION['admin_user'].'")</script>';

//check if user is logged in
if (!isset( $_SESSION['admin_user'])  && !isset($_SESSION['logged_in'])){
    // Redirect them to the login page if not
    header("Location: no_access.php");
} else {
  //show the page
?>
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">

<title>TEAM 13</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
.jumbotron{
        background-color: #041E42;
        color:white;
}

.btn-warning {
    background-color: #ff8200 !important;
    font-family: Georgia !important;
    color:white !important;

}

.btn-outline-success {
    background-color: #ff8200 !important;
    font-family: Georgia !important;
    color:white !important;

}

.img-fluid {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

</style>

</head>
<body>
<!-- Collapsible Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="https://utep.edu"><img src = "images/UTEP-footer.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="admin_home.php">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="appointments.php">Appointments</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="organizations.php">Organizations</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="admin_reports.php">Reports</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<img src="images/UTEP-Edge-logo.jpg" class="img-fluid" alt="Responsive image">

<br><br>


<div class="jumbotron">
<h1 align="center">HOME - ADMIN</h1>
<br><br>
<div class="row" align="center">

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<h4><a href="#col1Content" data-toggle="collapse">Current Processes</a></h4>
<div id="col1Content" class ="collapse in">

<table>
      <tr>
        <th>Service</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>Change of Major</td>
        <td>Oct 3rd, 2019</td>
        <td>Pending</td>
      </tr>
    </table> 
</div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<h4><a href="#col2Content" data-toggle="collapse">Past Processes</a></h4>
<div id="col2Content" class ="collapse in">

<table>
      <tr>
        <th>Service</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>Change of Major</td>
        <td>Oct 3rd, 2019</td>
        <td>Pending</td>
      </tr>
    </table> 
</div>
</div>


<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
<h4><a href="#col3Content" data-toggle="collapse">Past Visits to Edge Center</a></h4>
<div id="col3Content" class ="collapse in">

<table>
      <tr>
        <th>Service</th>
        <th>Date</th>
      </tr>
      <tr>
        <td>Change of Major</td>
        <td>Oct 3rd, 2019</td>

      </tr>

    </table> 
</div>
</div>


 <?php 
 $username = $_SESSION['admin_user'];
$queryExistingAppt = "SELECT * FROM Appointment WHERE A_username = '".$username."';";
$resultExistingAppt = $conn->query($queryExistingAppt);

if (!$resultExistingAppt) die ("database access failed");

$rows = $resultExistingAppt->num_rows;

for ($j = 0 ; $j < $rows ; ++$j)
{
    $row = $resultExistingAppt->fetch_array(MYSQLI_ASSOC);
    $location = $row['Ap_location'];
    $date = $row['Ap_date'];
    $time = $row['Ap_time'];
    $desc = $row['Ap_description'];
    $stUsername = $row['St_username'];
    $adminUsername = $row['A_username'];
}
?>

<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
<h4><a href="#col4Content" data-toggle="collapse">Upcoming Appointments</a></h4>
<div id="col4Content" class ="collapse in">

<table>
      <tr>
        <th>Location</th>
        <th>Date</th>
        <th>Time</th>
        <th>Description</th>
        <th>Advisor</th>
      <tr>
        <td><?php echo $location ?></td>
        <td><?php echo $date ?></td>
        <td><?php echo $time ?></td>
        <td><?php echo $desc?></td>
        <td><?php echo $adminUsername ?></td>

      </tr>

    </table> 
</div>
</div>
</div>
</div>

<?php
//closing tag 
}
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
