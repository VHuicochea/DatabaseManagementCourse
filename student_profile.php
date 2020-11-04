<?php
session_start();
require_once("config.php");
echo '<script>console.log("current user: '.$_SESSION['student_user'].'")</script>';
echo '<script>console.log("current user: '.$_SESSION['admin_user'].'")</script>';

//check if user is logged in
if (!isset( $_SESSION['student_user'])  && !isset($_SESSION['logged_in'])){
    // Redirect them to the login page if not
    header("Location: no_access.php");
} else {
  //show the page
?>
<!DOCTYPE HTML>
<head>

	

<title>TEAM 13</title>
<!-- <link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">   -->
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
        <a class="nav-link" href="home.php">Home</a>
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
        <a class="nav-link" href="student_profile.php">My Profile</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<br><br>

<img src="images/UTEP-Edge-logo.jpg" class="img-fluid" alt="Responsive image">


<div class="jumbotron">

<h1 class="text-center">My Profile</h1>

</div>
<?php
//cho $_SESSION['sudent_user'];
    //U_username | U_email| U_password | U_first | U_middle     | U_last     | St_id    | St_major    | St_classification
    //harcoded username for now. will figure out how to use session variables later.
    $username = $_SESSION['student_user'];


    $student_info_query = "SELECT * FROM Student WHERE U_username='".$username."';";
    $resultStudent_info = $conn->query($student_info_query);

    if (!$resultStudent_info) die ("database access failed");

    $rows = $resultStudent_info->num_rows;

    for ($j = 0 ; $j < $rows ; ++$j)
    {
        $row = $resultStudent_info->fetch_array(MYSQLI_ASSOC);
        $Fname = $row['U_first'];
        $Mname = $row['U_middle'];
        $Lname = $row['U_last'];
        $email = $row['U_email'];
        $id = $row['St_id'];
        $major = $row['St_major'];
        $classification = $row['St_classification'];
    }
?>

<div class="container">
  <div class="row py-3">
    <div class="col-lg text-center">
      <img src="images/avatar.png" alt="avatar" width="150px" height="150px" class="text-center">
    </div>
    <div class="col-lg text-left">
      <p><b>Name: </b> <?php echo $Fname." ".$Mname." ".$Lname;?></p>
      <p><b>ID: </b><?php echo $id; ?></p>
      <p><b>Email: </b><?php echo $email; ?> </p>
      <p><b>Major: </b><?php echo $major; ?></p>
      <p><b>Classification: </b><?php echo $classification; ?></p>
    </div>
  </div>
</div>

<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" align="center">
<img src="images/avatar.png" alt="avatar" width="60" height="60">
<p>Name: <?php 
        echo $Fname." ".$Mname." ".$Lname;
        ?></p>
<p>Email: <?php echo $email; ?> </p>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<p>ID: <?php echo $id; ?></p>
<p>Major: <?php echo $major; ?></p>
<p>Classification <?php echo $classification; ?></p>
</div> -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
<?php
}
?>