<html>
<body>
<?php 
phpinfo();
?>
</body>
</html>




<?php
// Start Session
session_start();
// Get data from the users
if(isset($_POST["login"]) && isset($_POST["username"]) && isset($_POST["password"]) )
{
  echo "success";
$user = $_POST["username"];
$password1 = $_POST["password"];
//$usertype=$_POST["usertype"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mansi";
$message=" ";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM logs WHERE username='$user' AND pass='$password1';";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
print_r($row);
//row [username,password ,usertype]
if (is_array($row)) 
{
    $_SESSION["username"] = $row['username'];
    echo $_SESSION["username"];

    if ((isset($_SESSION["username"]))) 
    {
      echo "Success";
      header("Location:content.php");
    }
    else
    {
       header("Location:resume_options.php");
    }
} 
else {
 $message = "Invalid Username or Password!";
 echo "<script type='text/javascript'>alert('$message');</script>";
}
}

?>




<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mansi";

$uname=$_SESSION['username'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Content_name,Content_type,Rating from content where Content_name in (select title from watchlist where username='$uname');";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " name: " . $row["Content_name"]. " - type: " . $row["Content_type"]. "rating: " . $row["Rating"]. "<br>";
  }
} else {
  echo "0 results";
}

?>