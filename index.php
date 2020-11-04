<!DOCTYPE HTML>
<head>
<!-- link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"  -->
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

<br><br>
<!-- <div id="menu"> -->

<div class="jumbotron">
<h2 align="center"> Welcome to the UTEP Engineering Edge Center. Please select your corresponding Log In: </h2>
<br></br>

<div class="row">

<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" align = "right">
<a href="student_login.php" ><button class = "btn btn-warning btn-lg">Student Log In</button></a><br><br>
</div>
<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
<a href="admin_login.php" ><button class = "btn btn-warning btn-lg">Admin Log In</button></a>
</div>

</div>

<div class="row">
<div class="col-lg-12 col-md-3 col-sm-6 col-xs-12" align = "center">
<a href="student_walk_in.php" ><button class = "btn btn-warning btn-lg">Student Walk In</button></a>
</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
