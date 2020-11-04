<?php
require_once('config.php');
?>

<!DOCTYPE HTML>
<head>
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">  
<title>TEAM 13</title>
</head>
<body>
<h1>CREATE ACCOUNT</h1>
<div id=menu>
<form action="create_account.php" method="post">
First Name: <input type="text" name="first_name"><br><br>
Middle Name: <input type="text" name="middle_name"><br><br>
Last Name: <input type="text" name="last_name"><br><br>
Email: <input type="text" name="email"><br><br>
ID: <input type="text" name="id"><br><br>
Major:  <select>
  <option value="cs">Computer Science</option>
  <option value="mechanical">Mechanical Engineering</option>
  <option value="electrical">Electrical Engineering</option>
  <option value="civil">Civil Engineering</option>
  <option value="industrial">Industrial Engineering</option>
</select> <br><br>

username: <input type="text" name="username"><br><br>
password: <input type="text" name="password"><br><br>

<input name='Submit' type="submit" value="Create">
</form>
<br>
<a href="index.php">Back</a></br>
</div>
<?php
if (isset($_POST['Submit'])){

    $userID = " ";
    //grab values from the form 
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : " ";
    $middleName = isset($_POST['middle_name']) ? $_POST['middle_name'] : " ";
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : " ";
    $email = isset($_POST['email']) ? $_POST['email'] : " ";
    $id = isset($_POST['id']) ? $_POST['id'] : " ";
    $major = isset($_POST['major']) ? $_POST['major'] : " ";
    $username = isset($_POST['username']) ? $_POST['username'] : " ";
    $password = isset($_POST['password']) ? $_POST['password'] : " ";

    //insert to User table;
    // $queryUser  = "INSERT INTO User(first_name, middle_name, last_name) VALUES ('".$firstName."', '".$middleName."', '".$lastName."');";
    $queryUser  = "INSERT INTO Student (U_email, U_username, U_password, U_first, U_middle, U_last, St_id, St_major)
                VALUES ('".$email."', '".$username."', '".$password."', '".$firstName."', '".$middleName."', '".$lastName."', '".$id."', '".$major."');";
    if ($conn->query($queryUser) === TRUE) {
       // echo "New record created successfully";
    } else {
        echo "Error: " . $queryUser . "<br>" . $conn->error;
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


    echo "<p>Hello " .$firstName. " ".$middleName." ".$lastName."!<br> Your username is: ".$username."</p>";

}
?>

</body>
</html>
