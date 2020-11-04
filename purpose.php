<!DOCTYPE HTML>
<head>

	

<title>TEAM 13</title>
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">  
</head>
<body>

<h1>UTEP EDGE CENTER</h1>
</br></br>

<div id=menu>
<form action="purpose.php" method="post">
    <label for='purpose'>Purpose of Visit:  </label>
    <select name="purpose">
    <option value=" ">Select...</option>
    <option value="advising" id="advising">Advising</option>
    <option value="admissions">Admissions</option>
    <option value="workshops">Workshops</option>
    <option value="orientation">Orientation</option>
    <option value="forms">Forms</option>
    </select> 
    <input name='Submit' type="submit" value="Submit" onclick="getpurpose()">
</form>
<!-- <script type="text/javascript">  
function getpurpose(){  
var purpose=document.getElementById("purpose").value;  
 
}  
</script>  -->

<?php
if (isset($_POST['Submit'])){
    //$selectedOption = "purpose";
    $selectedOption = isset($_POST['purpose']) ? $_POST['purpose'] : "purpose";
    //header("Location:".$selectedOption.".php");
    if ($selectedOption != " "){
        header("Location:".$selectedOption.".php");
    }else{
        echo "<p>Please select an option</p>";
    }

}
?>
</body>
</html>
