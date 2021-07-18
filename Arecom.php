<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <style>
  	
  #heading{
  	background-color: black;
  	color: white;
  	border-radius: 10px;
  	width: 30%;
  }
  td{
  	font-size: 15px;
  	width:150px; 
    text-align:center; 
    /*border:1px solid black; */
    padding:5px
  }
  body
  {
  	background-color:black !important;
  	background-size: cover;

  }

</style>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
<body>
	
	<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">VIEW <span class="w3-hide-small">YOUR</span> RESUME</span>
  </div>
</div>
	<?php 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mansi";
	$message=" ";
	$uname=$_SESSION['username'];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
	}




	$sql = "SELECT Content_name from content where Content_name in (select title from watchlist where username='$uname');";

	$result = mysqli_query($conn, $sql);

	echo "<table class='table table-hover resume' style='width: 65%;margin-left: 40px;margin-right: 40px;margin-top: 50px;border-collapse:separate; border-spacing:0 15px;'>
	<tr>
	</tr>";
	//row []
	while($row = mysqli_fetch_array($result))
	{

	echo "<tr>";
	echo "<td id='heading'>Full Name</td>";
	echo "<td style='width: 30%;'>" . $row['Content_name'] . "</td>";
	echo "</tr>";
	/*echo "<tr>";
	echo "<td id='heading'>About Me:</td>";
	echo "<td>" . $row['Content_type'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='heading'>Date of birth</td>";
	echo "<td>" . $row['Rating'] . "</td>";
	echo "</tr>";
	echo "<tr>";*/
	/*echo "<td id='heading'>Phone number</td>";
	echo "<td>" . $row['phonenumber'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='heading'>Qualification1</td>";
	echo "<td>" . $row['qualification1'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='heading'>Qualification2</td>";
	echo "<td>" . $row['qualification2'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='heading'>Qualification3</td>";
	echo "<td>" . $row['qualification3'] . "</td>";
	echo "</tr>";
	echo "<td id='heading'>Skills</td>";
	echo "<td>" . $row['skills'] . "</td>";
	echo "</tr>";
	echo "<td id='heading'>Extra Ciricullar Activities</td>";
	echo "<td>" . $row['extra'] . "</td>";
	echo "</tr>";
	echo "<td id='heading'>Work Experience</td>";
	echo "<td>" . $row['wexperience'] . "</td>";
	echo "</tr>";*/
	}
	echo "</table>";

	/*if(isset($_POST['delete']))
	{
		// sql to delete a record
		$sql1 = "DELETE FROM resumes WHERE username='$uname';";
	echo "<script type='text/javascript'>alert('Deleted your resume. To create new resume sign up again');</script>";
		if ($conn->query($sql1) === TRUE) {
		   
		   sleep(3);
		    header("Location:register.php");
		} else {
		  echo "Error deleting record: " . $conn->error;
		}
		 
	}*/
	?>

<!--<a href="userpage.php" class="btn btn-info" role="button" style='margin-left: 40px;margin-right: 40px;margin-top: 20px;'>Click here to edit your resume</a>
<form method="post" action="">
	<button class="btn btn-danger" style='margin-left: 40px;margin-right: 40px;margin-top: 20px;' type="submit" name="delete">Delete Resume</button>
</form>-->
<center><a class="btn btn-primary" href="login.php" role="button" style='margin-left: 40px;margin-right: 40px;margin-top: 20px; height: 50px; width: 120px; font-size: 30px; font-family: Roboto; background-color: red; border-color: red; color: white;font-weight: bold; margin-top: 0px;border-top: 0px;'>Logout</a></center>

</body>
</html>