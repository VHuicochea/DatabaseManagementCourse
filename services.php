<?php
session_start();
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
<!-- <link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">  
<script src="js/servicesInfo.js"></script> -->

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


<img src="images/UTEP-Edge-logo.jpg" class="img-fluid" alt="Responsive image">

<br><br>


<p>

<!-- <p>
<button onclick=toggleServiceInfo1()> Advising - Lower Division </button>
<div id="serviceInfo1">
  <div id="undergradAdvising">
    <h4>Undegraduate Advising (Lower Division)</h4> 
    <a target="_blank" href="forms/exampleForm.pdf">Undergrad Lower Division Advising Form</a>
  </div>
  <div id="Probation"><h4>Probation</h4>
    <a target="_blank" href="forms/exampleForm.pdf">Probation Form</a>
  </div>
</div>
</p> -->
<div class="jumbotron">
<h1 align="center">Services</h1>
<br><br>

<div class="row" align="center">


<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<!-- <p><button onclick="toggleOrgInfo1()">ACM-W WICS</button> -->
<!-- maybe hide this info in a div -->
<h4><a href="#col1Content" data-toggle="collapse">Advising - Lower Division</a></h4>
<!-- <div id="orgInfo1"> -->
<div id="col1Content" class ="collapse in">

<div id="undergradAdvising">
    <h4>Undegraduate Advising (Lower Division)</h4> 
    <a target="_blank" href="forms/exampleForm.pdf">Undergrad Lower Division Advising Form</a>
  </div>
<div id="Probation"><h4>Probation</h4>
    <a target="_blank" href="forms/exampleForm.pdf">Probation Form</a>
</div>

</div>

</div>



<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<!-- <p><button onclick="toggleOrgInfo2()">ACM</button>
<div id="orgInfo2"> -->
<h4><a href="#col2Content" data-toggle="collapse">Undergraduate Students</a></h4>
<div id="col2Content" class ="collapse in">
<div id="undergradResearch"><h4>Undergrad Research Opportunities</h4>
    <a  target="_blank" href="forms/exampleForm.pdf">Undergraduate Travel Research Conference Grant Application</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Program Applications</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Program Recommendation Form</a><br>
  </div>
  <div id="studentTravel"><h4>Student Travel</h4>
    <a  target="_blank" href="forms/exampleForm.pdf">Student Travel Form 1</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Student Travel Form 2</a>
  </div>
  <div id="changeOfMajor"><h4>Change of Major</h4>
    <a  target="_blank" href="forms/exampleForm.pdf">Change of Major Form 1</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Change of Major Form 2</a>
  </div>
  <div id="courses"><h4>Courses</h4>
    <a  target="_blank" href="forms/exampleForm.pdf">Course Waiver Form</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Course Substitution Form </a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Grade Change Form </a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">GPA Recalculation Form </a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Faculty Add/Drop Form </a><br>
  </div>
  <div id="degree"><h4>Degree</h4>
    <a  target="_blank" href="forms/exampleForm.pdf">Minor Form</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Dual Degree Form</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Graduation Packet</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Petition for Reinstatement Form</a><br>
  </div></div>
  <!-- <br>
</div>
</p> -->
</div>


<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<!-- <p><button onclick="toggleOrgInfo2()">ACM</button>
<div id="orgInfo2"> -->
<h4><a href="#col3Content" data-toggle="collapse">Graduate Students</a></h4>
<div id="col3Content" class ="collapse in">
<div id="graduateStudies"><h4>Graduate Studies</h4>
    <a  target="_blank" href="forms/exampleForm.pdf">Tuition Waiver Form</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Fast Track Form</a>
  </div>
  <div id="graduateResearch"><h4>Graduate Research</h4>
    <a  target="_blank" href="forms/exampleForm.pdf">Grad Research Form 1</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Grad Research Form 2</a><br>
  </div>
  <div id="graduateForms"><h4>Graduate Forms</h4>
    <a  target="_blank" href="forms/exampleForm.pdf">Thesis Defense Form</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">Disseration Form</a><br>
    <a  target="_blank" href="forms/exampleForm.pdf">TA/RA Form</a>
  </div></div>
  <!-- <br>
</div>
</p> -->
</div>

<!-- 
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

<h4><a href="#col4Content" data-toggle="collapse">College Accreditation / UNIV 1301</a></h4>
<div id="col4Content" class ="collapse in">
<div id="ABET">
    <h4>ABET Forms</h4>
    <a target="_blank" href="forms/exampleForm.pdf">ABET Form</a>
  </div>
</div>
</div> -->


<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<!-- <p><button onclick="toggleOrgInfo2()">ACM</button>
<div id="orgInfo2"> -->
<h4><a href="#col5Content" data-toggle="collapse">Engineering Success Program & Initiatives</a></h4>
<div id="col5Content" class ="collapse in">
<div id="engSuccess">
    <h4>Information</h4>
    <span>The UTEP College of Engineering continuously supports you, our students, 
      with their educational and professional goals through experiences beyond the classroom. 
      Regardless of how you entered the College of Engineering the educational opportunities 
      offered to you will greatly impact your success as a professional.<br>

      This combination of knowledge and experience will require an considerable investment of time and effort.
      To maximize your investment, the following areas of experiences have been identified for you:
      <ul>
        <li>Global Programs</li>
        <li>Internships & Coops</li>
        <li>Research Experience for Undergraduates</li>
        <li> Student Organizations</li>
      </ul>

      The goal for you as a College of Engineering student is to get involved in at least 
      one of the above experiences but ultimately to obtain an internship, coop or research experience
      </span>
  </div>
</div>
  <!-- <br>
</div>
</p> -->
</div>

</div>
</div>
<?php
}
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
