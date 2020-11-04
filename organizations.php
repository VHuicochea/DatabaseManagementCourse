<?php
require_once("config.php");
?>
<!DOCTYPE HTML>
<head>

	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">

<title>TEAM 13</title>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- 
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">  
<script src="js/orgs.js"></script> -->
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


<!-- <h1>UTEP ENGINEERING EDGE CENTER</h1> -->
<img src="images/UTEP-Edge-logo.jpg" class="img-fluid" alt="Responsive image">

<br><br>
<!-- <div class="topnav">
  <a href="home.php">Home</a>
  <a href="services.php">Services</a>
  <a href="appointments.php">Appointments</a>
  <a href="organizations.php">Organizations</a>
  <a href="student_profile.php">My Profile</a>
</div>  -->



<p>
<!-- <h2>Organizations</h2> -->

<br></br>

<div class="jumbotron">
<h1 align="center">Student Organizations</h1>
<br><br>

<div class="row" align="center">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<!-- <p><button onclick="toggleOrgInfo1()">ACM-W WICS</button> -->
<!-- maybe hide this info in a div -->
<h4><a href="#col1Content" data-toggle="collapse">ACM-W WICS</a></h4>
<!-- <div id="orgInfo1"> -->
<div id="col1Content" class ="collapse in">
  Meeting times: Mondays at 6 pm <br>
  Location: CCSB 1.0410 <br>
  Upcoming Events: Christmas Party <br> <a href="https://www.facebook.com/acmwwics/">Facebook Page</a>
</div>
  <!-- <br> -->
<!-- </div>
</p> -->
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<!-- <p><button onclick="toggleOrgInfo2()">ACM</button>
<div id="orgInfo2"> -->
<h4><a href="#col2Content" data-toggle="collapse">ACM</a></h4>
<div id="col2Content" class ="collapse in">

  Meeting times: Tuesdays at 5 pm <br>
  Location: UGLC GAIA  <br>
  Upcoming Events: Hackathon <br> <a href="https://www.facebook.com/utepacm/">Facebook Page</a>
</div>
  <!-- <br>
</div>
</p> -->
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<!-- <p><button onclick="toggleOrgInfo2()">ACM</button>
<div id="orgInfo2"> -->
<h4><a href="#col3Content" data-toggle="collapse">MAES / SHPE</a></h4>
<div id="col3Content" class ="collapse in">
  Meeting times: Thurdays at 4 pm <br>
  Location: ACES <br>
  Upcoming Events: SHPE Conference <br> <a href="https://www.facebook.com/utepmaesshpe/">Facebook Page</a>
</div>
  <!-- <br>
</div>
</p> -->
</div>

<!-- <p><button onclick="toggleOrgInfo3()">MAES / SHPE </button>
<div id="orgInfo3">
  Meeting times: Thurdays at 4 pm <br>
  Location: ACES <br>
  Upcoming Events: SHPE Conference <br> <a href="">details</a>
  <br>
</div>
</p> -->

<div class="col-lg- col-md-3 col-sm-6 col-xs-12">
<!-- <p><button onclick="toggleOrgInfo2()">ACM</button>
<div id="orgInfo2"> -->
<h4><a href="#col4Content" data-toggle="collapse">SWE</a></h4>
<div id="col4Content" class ="collapse in">
Meeting times: Fridays at 4 pm <br>
  Location: BUSN 303 <br>
  Upcoming Events: SWE Conference <br> <a href="https://www.facebook.com/UTEPSWE/">Facebook Page</a>
</div>
  <!-- <br>
</div>
</p> -->
</div>


<!-- <p><button onclick="toggleOrgInfo4()">SWE</button>
<div id="orgInfo4">
  Meeting times: Fridays at 4 pm <br>
  Location: BUSN 303 <br>
  Upcoming Events: SWE Conference <br> <a href="">details</a>
  <br>
</div>
</p>
 -->

 <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
 <p><button onclick="toggleOrgInfo2()">ACM</button>
<div id="orgInfo2"> -->
<!-- <h4>IEEE</h4>
Meeting times: Thurdays at 6 pm <br>
  Location: ENG 206 <br>
  Upcoming Events: General Meeting <br> <a href="">details</a>
   <br>
</div>
</p> 
</div>  -->

<!-- <p><button onclick="toggleOrgInfo5()">IEEE</button>
<div id="orgInfo5">
  Meeting times: Thurdays at 6 pm <br>
  Location: ENG 206 <br>
  Upcoming Events: General Meeting <br> <a href="">details</a>
  <br>
</div>
</p>

</p> -->
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
