<?php
require_once("config.php");
?>

<!DOCTYPE HTML>
<head>
<link rel="stylesheet" href="css/styles.css"> 
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet"> 
<title>TEAM 13</title>
</head>
<body>
<h1>LOG IN</h1>
<div id="menu">
<form action="login.php" method="post">
username: <input type="text" name="username"><br><br>
password: <input type="text" name="password"><br><br>
<input name='Submit' type="submit" value="Submit">
</form>
<br>
</div>
<a href="index.php">Back</a></br>

<?php
if (isset($_POST['Submit'])){
    $existingUser = " ";
    $existingPass = " ";
    
    $input_username = isset($_POST['username']) ? $_POST['username'] : " ";
    $input_password = isset($_POST['password']) ? $_POST['password'] : " ";

    $queryStudent = "SELECT * FROM Student WHERE U_username='".$input_username."' AND U_Password='".$input_password."';";
    $resultStudent = $conn->query($queryStudent);

    $queryAdmin = "SELECT * FROM Admin WHERE U_username='".$input_username."' AND U_Password='".$input_password."';";
    $resultAdmin = $conn->query($queryAdmin);
  if ($resultStudent->num_rows > 0 || $resultAdmin ->num_rows > 0  ) {
    header("Location: purpose.php");
    } else {
    echo "User not found.";
  }
}

?>
</body>
</html>