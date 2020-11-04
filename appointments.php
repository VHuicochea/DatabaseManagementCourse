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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>TEAM 13</title>
<!-- <link rel="stylesheet" href="css/styles.css"> -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"> -->
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
.btn-warning {
    background-color: #ff8200 !important;
    font-family: Georgia !important;
    color:white !important;

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
<!-- 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- <h1>UTEP ENGINEERING EDGE CENTER</h1> -->
<img src="images/UTEP-Edge-logo.jpg" class="img-fluid" alt="Responsive image">


<?php
// $username = $_SESSION['student_user'];
// $queryExistingAppt = "SELECT * FROM Appointment WHERE St_username = '".$username."';";
// $resultExistingAppt = $conn->query($queryExistingAppt);

// if (!$resultExistingAppt) die ("database access failed");

// $rows = $resultExistingAppt->num_rows;

// for ($j = 0 ; $j < $rows ; ++$j)
// {
//     $row = $resultExistingAppt->fetch_array(MYSQLI_ASSOC);
//     $location = $row['Ap_location'];
//     $date = $row['Ap_date'];
//     $time = $row['Ap_time'];
//     $desc = $row['Ap_description'];
//     $stUsername = $row['St_username'];
//     $adminUsername = $row['A_username'];
// }
// ?>

<div id=menu>   
    <div class="jumbotron">
        <h2 class="text-center">Request an Appointment</h2>
    </div>
    <form class="text-center" action="appointments.php" method="post">
        <div class="container">
            <div class="row py-3">
                <div class="col-sm">
                    Description: <input type="text" name="desc">
                </div>
                <div class="col-sm">
                    Date:
                    <select name="date">
                        <option value="2019-11-19">2019-11-19</option>
                    </select> 
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm">
                    Advisor: 
                    <select name="advisor">
                        <option value="admin1">Advisor1</option>
                        <option value="admin2">Advisor2</option>
                        <option value="admin3">Advisor3</option>
                        <option value="admin4">Advisor4</option>
                        <option value="mpalacios5">Mariel Palacios</option>
                        <option value="pamendoza">Patricia Mendoza</option>
                    </select>
                </div>
                <div class="col-sm">
                    Time:
                    <select name="time">
                        <option value="00:00:00">00:00:00</option>
                    </select>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm"></div>
                <div class="col-sm">
                    Location:
                    <select name="location">
                        <option value="location1">location1</option>
                        <option value="location2">location2</option>
                        <option value="location3">location3</option>
                        <option value="location4">location4</option>
                    </select>
                </div> 
            </div>
            <div class="row py-3">
                <div class="col-sm">
                    <input name='Submit' type="submit" value="Submit" class = "btn btn-warning btn-lg">
                </div>
            </div>
        </div>  
    </form>       
</div>

                <!-- Description: <input type="text" name="desc">
                <br>
                <br>
                Date:
                <select name="date">
                    <option value="2019-11-19">2019-11-19</option>
                </select> 
                <br>
                <br>
                Time:
                <select name="time">
                    <option value="00:00:00">00:00:00</option>
                </select> 
                <br>
                <br>
                Location:
                <select name="location">
                    <option value="location1">location1</option>
                    <option value="location2">location2</option>
                    <option value="location3">location3</option>
                    <option value="location4">location4</option>
                </select> 
                <br>
                <br>
                Advisor: 
                <select name="advisor">
                    <option value="dummyAdmin1">Advisor1</option>
                    <option value="dummyAdmin2">Advisor2</option>
                    <option value="dummyAdmin3">Advisor3</option>
                    <option value="dummyAdmin4">Advisor4</option>
                    <option value="mpalacios5">Mariel Palacios</option>
                    <option value="pamendoza">Patricia Mendoza</option>
                </select> 
                <br>
                <br>
                <input name='Submit' type="submit" value="Submit"> -->
            </form>
        </div>
    </div>
</div>


<?php
if (isset($_POST['Submit'])){
    // Ap_location    | Ap_date    | Ap_time  | Ap_description    | St_username | A_username
    $userID = " ";
    //grab values from the form 
    $description = isset($_POST['desc']) ? $_POST['desc'] : " ";
    //$date = isset($_POST['date']) ? $_POST['date'] : " ";
    //harcoded date for now 
    $date = "2019-11-19";
    //hardcoded time 
    $time = "00:00:00";
    // $time = isset($_POST['time']) ? $_POST['time'] : " ";
    $location = isset($_POST['location']) ? $_POST['location'] : " ";
    $advisor = isset($_POST['advisor']) ? $_POST['advisor'] : " ";
    $username = $_SESSION['student_user'];
    //$adminUsername ="dummyAdmin1";

    //insert to User table;
    // $queryUser  = "INSERT INTO User(first_name, middle_name, last_name) VALUES ('".$firstName."', '".$middleName."', '".$lastName."');";
    $queryAppt  = "INSERT INTO Appointment (Ap_location, Ap_date, Ap_time, Ap_description, St_username, A_username)
                VALUES ('".$location."','".$date."', '".$time."', '".$description."','".$username."','".$advisor."');";
    if ($conn->query($queryAppt) === TRUE) {
        echo "<p>Appointment Submitted! </p> ";
    } else {
        echo "Error: " . $queryAppt . "<br>" . $conn->error;
    }

    // grab the id of the entry just created to use for user_login query 
    // $query  = "SELECT user_id FROM User WHERE first_name='".$firstName."'";
    // $result = $conn->query($query);
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //        // echo $row['user_id'];
    //         $userID = $row['user_id'];
    //     }
    // }

    // //insert to user_login table
    // $queryUserLogin  = "INSERT INTO user_login  VALUES ('".$userID."','".$username."', '".$password."');";
    // if ($conn->query($queryUserLogin) === TRUE) {
    //     //echo "New record created successfully";
    //     echo "<button><a href='login.php'>LOG IN</a></button>";
    // } else {
    //     echo "Error: " . $queryUserLogin . "<br>" . $conn->error;    
    // }




}
?>

</body>
</body>
</html>
<?php
}
?>