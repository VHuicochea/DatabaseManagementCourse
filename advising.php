
<?php
require_once('config.php');
?>
<!DOCTYPE HTML>
<head>

<title>TEAM 13</title>
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">  
</head>
<body>

<h1>Advising</h1>
</br></br>
<div id=content>
<p>Welcome to UTEP Edge Center Advising!</p><br>

<div id=menu>
<form action="advising.php" method="post">
<p>Set up an appointment</p><br>

Advisor <select>
        <option value="adv1">advisor 1</option>
        <option value="adv2">adv 2</option>
        <option value="adv3">adv 3</option>
        </select>
<br><br>
Location: <input type="text" name="location"><br><br>
Date: <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" /><br><br>
Time: <input type="text" name="time"><br><br>
Description <input type="text" name="description"><br><br>
Major:  <select>
  <option value="cs">Computer Science</option>
  <option value="mechanical">Mechanical Engineering</option>
  <option value="electrical">Electrical Engineering</option>
  <option value="civil">Civil Engineering</option>
  <option value="industrial">Industrial Engineering</option>
</select> <br><br>


<input name='Submit' type="submit" value="Submit">
</form>
<br>
<a href="purpose.php">Back</a></br>
</div>
<?php
if (isset($_POST['Submit'])){

    $advisor = isset($_POST['advisor']) ? $_POST['advisor'] : " ";
    $location = isset($_POST['location']) ? $_POST['location'] : " ";
    $date = isset($_POST['date']) ? $_POST['date'] : " ";
    $time = isset($_POST['time']) ? $_POST['time'] : " ";
    $description = isset($_POST['description']) ? $_POST['decription'] : " ";
    $major = isset($_POST['major']) ? $_POST['major'] : " ";

    $queryAdvising = "INSERT INTO appointment VALUES ('".$location."','2019-11-19','22:00:00','".$description."')";";

    if ($conn->query($queryAdvising) === TRUE) {
     echo "New record created successfully";
    } else {
    echo "Error: " . $queryAdvising . "<br>" . $conn->error;
    }
}

?>
</div>
</body>
</html>
