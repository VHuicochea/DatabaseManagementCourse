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

.jumbotron{
        background-color: #041E42;
        color:white;
}

.navbar {
  background-color: #041E42;

}

</style>
</head>
<body>

<!-- Collapsible Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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

<h1 align="center">Reports</h1>
<br><br>
<div class="jumbotron">
  <h2>Choose the service you would like to generate a report from:</h2>
  

  <p>

    <form action="admin_reports.php" method=post>
    <select name="service">
    <option value="Service1">Service1</option>
    <option value="Service2">Service2</option>

    </select><br><br>
    <input name='Submit' type="submit" value="Generate" class="btn btn-outline-success my-2 my-sm-0">
  

    </form>
  </div>

 <?php 
 if (isset($_POST['Submit'])){
$username = $_SESSION['admin_user'];
$serviceSelected =  isset($_POST['service']) ? $_POST['service'] : " ";
$queryStudentReports = "SELECT * FROM walk_in WHERE W_purpose ='".$serviceSelected."';";
$resultStudentReports = $conn->query($queryStudentReports);

if (!$resultStudentReports) die ("database access failed");

$rows = $resultStudentReports->num_rows;

if ($rows >0){
for ($j = 0 ; $j < $rows ; ++$j)
{
    $row = $resultStudentReports->fetch_array(MYSQLI_ASSOC);
    $service = $row['W_purpose'];
    $date = $row['W_date'];
    $time = $row['W_time'];
    $stUsername = $row['St_username'];

    echo "<p>
          <table>
          <tr>
            <th>Service</th>
            <th>Date</th>
            <th>Time</th>
            <th>Student</th>
          </tr>
          <tr>
            <td>".$service."</td>
            <td>".$date."</td>
            <td>".$time."</td>
            <td>".$stUsername."</td>
          </tr>
        </table></p> ";
  }
}
else {
  echo "<br><br>Empty Results";
}
}

?> 
</p>
<?php
//closing tag 
}
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
