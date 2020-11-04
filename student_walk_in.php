<?php
session_start();
require_once('config.php');
$username = $_SESSION['student_user'];
echo '<script>console.log("CURRENT USER: '.$username.' ")</script>';
if (isset($_POST['Submit'])){
    //grab values from the form 
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : " ";
    $middleName = isset($_POST['middle_name']) ? $_POST['middle_name'] : " ";
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : " ";
    $email = isset($_POST['email']) ? $_POST['email'] : " ";
    $id = isset($_POST['id']) ? $_POST['id'] : " ";
    $major = isset($_POST['major']) ? $_POST['major'] : " ";
    $classification = isset($_POST['classification']) ? $_POST['classification'] : " ";
    $service = isset($_POST['service']) ? $_POST['service'] : " ";

    //hardcode for now
    //$date = date_format($test, 'Y-m-d');
    $date = date("Y-m-d"); 
    $time = date("h:i:s");

    //need a query to get the admin from the selected service 
    $adminQuery = "SELECT A_username FROM manage AS A WHERE D_name IN ( SELECT D_name FROM service AS S WHERE A.D_name = S.D_name AND S_name ='".$service."');";
    $resultAdminQuery = $conn->query($adminQuery);
    if (!$resultAdminQuery) die ("database access failed");
    $rows = $resultAdminQuery->num_rows;
    for ($j = 0 ; $j < $rows ; ++$j)
    {
    $row = $resultAdminQuery->fetch_array(MYSQLI_ASSOC);
    $adminName = $row['A_username'];
    }
    echo '<form action="appointments.php">
    <p>The advisor for this service is: '.$adminName.'<br>
    <input type="hidden" id="adminName" name="adminName" value="<?php echo $adminName?>">
    <input type="submit" value="Request an appointment">
    </form>';




    //submit the walk in to the admin as a request
    // $submitRequestQuery = "INSERT INTO request VALUES ('".$date."','".$username."','".$adminName."','".$service."','Pending')";
    // if ($conn->query($submitRequestQuery) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $submitRequestQuery . "<br>" . $conn->error;
    //     echo "Error! Failed to create record. ";
    // } 

    // $username = isset($_POST['username']) ? $_POST['username'] : " ";
    // $password = isset($_POST['password']) ? $_POST['password'] : " ";


    //insert to walk in
    $queryWalkIn  = "INSERT INTO walk_in (W_purpose, W_date, W_time, St_username) 
                         VALUES ('".$service."', '".$date."', '".$time."', '".$username."')";

    if ($conn->query($queryWalkIn) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $queryWalkIn . "<br>" . $conn->error;
        echo "Error! Failed to create record. ";
    } 
   

}

?>
<!DOCTYPE HTML>
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="https://utep.edu"><img src = "images/UTEP-footer.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="home.php"></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="services.php"></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="appointments.php"></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="organizations.php"></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="student_profile.php"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" align="right">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<img src="images/UTEP-Edge-logo.jpg" class="img-fluid" alt="Responsive image">

<br><br>

<div class="jumbotron">

<h1 align="center">UTEP ENGINEERING EDGE CENTER</h1>

<h2 align="center">Please fill this form</h2>

<form action="student_walk_in.php" method="post">
<div class="row">

<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" align = "right">
First Name: <input type="text" name="first_name"><br><br>
Middle Name: <input type="text" name="middle_name"><br><br>
Last Name: <input type="text" name="last_name"><br><br>
Email: <input type="text" name="email"><br><br>
</div>

<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
ID: <input type="text" name="id"><br><br>
Major:  <select name="major">
  <option value="ComputerScience"> Computer Science</option>
  <option value="Mechanical">Mechanical Engineering</option>
  <option value="Electrical">Electrical Engineering</option>
  <option value="Civil">Civil Engineering</option>
  <option value="Industrial">Industrial Engineering</option>
</select> <br><br>

Classification:  <select name="classification">
  <option value="senior" >Senior</option>
  <option value="junior">Junior</option>
  <option value="sophomore">Sophomore</option>
  <option value="freshman">Freshman</option>
</select> <br><br>

Reason for visit: <select name="service">
  <option value="Service1" >Service1</option>
  <option value="Service2" >Service2</option>
  <option value="Service3" >Service3</option>
  <option value="Service4" >Service4</option>
 
</select> <br><br>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-3 col-sm-6 col-xs-12" align = "center">
<input name='Submit' type="submit" value="Submit" class = "btn btn-warning btn-lg">
</form>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
