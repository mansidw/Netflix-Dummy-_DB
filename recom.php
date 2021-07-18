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
  	font-size: 20px;
  	width:150px; 
    text-align:center; 
    /*border:1px solid black; */
    padding:2px !important;
    height: 10px;
    color:white;
    font-weight: bold;
    font-family: Roboto;
  }
  body
  {
  	background-color: #f7dbda !important;
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

	
	<!--<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">VIEW <span class="w3-hide-small">YOUR</span> RESUME</span>
  </div>
</div>-->
<img src="images/netflixgif.gif" style="margin-left: 80px;margin-bottom: 20px;">
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




	//$sql = "SELECT Content_name from content where Content_name in (select title from watchlist where username='$uname');";

	$sql = "SELECT * from content where Content_ID in (select distinct Content_ID from genre where genre in (select distinct genre from genre where Content_ID in(select Content_ID from content where Content_name in (select title from watchlist where username='$uname')))) and Content_name not in(select title from watchlist where username='$uname');";

	

	$result = mysqli_query($conn, $sql);

	echo "<br>";
	echo('<span style="color: black; font-family:Roboto; font-size:35px; margin-left:400px; font-weight:bold; ">Recommendation on basis of Genres :</span>');
	echo "<table class='table resume' style='width: 40%;margin-left: 400px;margin-right: 40px;margin-top: 20px;border-collapse:separate; border-spacing:0 7px;'>
	<tr>
	</tr>";

	echo "<td id='heading' style='font-size:30px;'>TITLE</td>";
	while($row = mysqli_fetch_array($result))
	{

	echo "<tr>";
	echo "<td style='width: 30%; color:black;'>" . $row['Content_name'] . "</td>";
	echo "</tr>";

	}
	echo "</table>";
	echo "<br>";

	$sql1 = "SELECT Content_name from content where Content_ID in(select Content_ID from cast where cast in(select cast from cast where Content_ID in(select Content_ID from content where Content_name in (select title from watchlist where username='$uname')))) and Content_name not in(select title from watchlist where username='$uname');";

	$result1 = mysqli_query($conn, $sql1);

	echo "<br>";
	echo('<span style="color: black; font-family:Roboto; font-size:35px; margin-left:400px; font-weight:bold; ">Recommendation on basis of Cast :</span>');
	echo "<table class='table resume' style='width: 40%;margin-left: 400px;margin-right: 40px;margin-top: 20px;border-collapse:separate; border-spacing:0 7px;'>
	<tr>
	</tr>";

	echo "<td id='heading' style='font-size:30px;'>TITLE</td>";
	while($row = mysqli_fetch_array($result1))
	{

	echo "<tr>";
	echo "<td style='width: 30%; color:black;'>" . $row['Content_name'] . "</td>";
	echo "</tr>";

	}
	echo "</table>";


	$sql2 = "SELECT Content_name from content where Director in(select Director from content where Content_ID in(select Content_ID from content where Content_name in (select title from watchlist where username='$uname'))) and Content_name not in(select title from watchlist where username='$uname');";

	$result2 = mysqli_query($conn, $sql2);

	echo "<br>";
	echo('<span style="color: black; font-family:Roboto; font-size:35px; margin-left:390px; font-weight:bold; ">Recommendation on basis of Director :</span>');
	echo "<table class='table resume' style='width: 40%;margin-left: 400px;margin-right: 40px;margin-top: 20px;border-collapse:separate; border-spacing:0 7px;'>
	<tr>
	</tr>";
	
	echo "<td id='heading' style='font-size:30px;'>TITLE</td>";
	while($row = mysqli_fetch_array($result2))
	{

	echo "<tr>";
	echo "<td style='width: 30%; color:black;'>" . $row['Content_name'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";


	$sql3 = "SELECT Content_name from content where Country in(select Country from content where Content_ID in(select Content_ID from content where Content_name in (select title from watchlist where username='$uname'))) and Content_name not in(select title from watchlist where username='$uname');";

	$result3 = mysqli_query($conn, $sql3);

	echo "<br>";
	echo('<span style="color: black; font-family:Roboto; font-size:35px; margin-left:340px; font-weight:bold; ">Recommendation on basis of same Country content :</span>');
	echo "<table class='table resume' style='width: 40%;margin-left: 400px;margin-right: 40px;margin-top: 20px;border-collapse:separate; border-spacing:0 7px;'>
	<tr>
	</tr>";
	//row []
	echo "<td id='heading' style='font-size:30px;'>TITLE</td>";
	while($row = mysqli_fetch_array($result3))
	{

	echo "<tr>";
	echo "<td style='width: 30%; color:black;'>" . $row['Content_name'] . "</td>";
	echo "</tr>";
	//echo "<tr>";
	}
	echo "</table>";



	$sql4 = "SELECT distinct content.Content_name from content,stream where content.Content_ID=stream.Content_ID and stream.Stream_ID in (select stream.Stream_ID from sitelog, stream where stream.customer_id=sitelog.c_id and  sitelog.c_id in (select c_id from sitelog where timestampdiff(year,DOB,curdate()) >(select timestampdiff(year,DOB,curdate())-2 from sitelog where username='$uname') AND timestampdiff(year,DOB,curdate()) <(select timestampdiff(year,DOB,curdate())+2 from sitelog where username='$uname'))) and stream.Content_ID not in (select Content_ID from Stream where customer_id=(select c_id from sitelog where username='$uname'));";

	$result4 = mysqli_query($conn, $sql4);

	echo "<br>";
	echo('<span style="color: black; font-family:Roboto; font-size:35px; margin-left:340px; font-weight:bold; ">Recommendation on basis of Age Group :</span>');
	echo "<table class='table resume' style='width: 40%;margin-left: 400px;margin-right: 40px;margin-top: 20px;border-collapse:separate; border-spacing:0 7px;'>
	<tr>
	</tr>";
	//row []
	echo "<td id='heading' style='font-size:30px;'>TITLE</td>";
	while($row = mysqli_fetch_array($result4))
	{

	echo "<tr>";
	echo "<td style='width: 30%; color:black;'>" . $row['Content_name'] . "</td>";
	echo "</tr>";
	//echo "<tr>";
	}
	echo "</table>";


	$sql5 = "SELECT DISTINCT content.Content_name FROM content, stream WHERE content.Content_ID = stream.Content_ID AND stream.Stream_ID
    IN(SELECT stream.Stream_ID FROM stream, sitelog WHERE sitelog.c_id=stream.customer_id AND sitelog.c_id
         IN(SELECT sitelog.c_id FROM sitelog WHERE sitelog.country=(select country from sitelog where username='$uname'))) and stream.Content_ID not in (select Content_ID from Stream where customer_id=(select c_id from sitelog where username='$uname'))";

	$result5 = mysqli_query($conn, $sql5);

	echo "<br>";
	echo('<span style="color: black; font-family:Roboto; font-size:35px; margin-left:250px; font-weight:bold; ">Recommendation on basis of Content popular in Country :</span>');
	echo "<table class='table resume' style='width: 40%;margin-left: 400px;margin-right: 40px;margin-top: 20px;border-collapse:separate; border-spacing:0 7px;'>
	<tr>
	</tr>";
	//row []
	echo "<td id='heading' style='font-size:30px;'>TITLE</td>";
	while($row = mysqli_fetch_array($result5))
	{

	echo "<tr>";
	echo "<td style='width: 30%; color:black;'>" . $row['Content_name'] . "</td>";
	echo "</tr>";
	//echo "<tr>";
	}
	echo "</table>";


	$sql6 = "SELECT Content_name from content  where Content_ID in ( select Content_ID from genre where genre in (select genre from genre where Content_ID in (select Content_ID from Stream where customer_id=(select c_id from sitelog where username='$uname') and U_rating = 'Like'))) and Content_ID not in (select Content_ID from Stream where customer_id=(select c_id from sitelog where username='$uname'))";

	$result6 = mysqli_query($conn, $sql6);

	echo "<br>";
	echo('<span style="color: black; font-family:Roboto; font-size:35px; margin-left:170px; font-weight:bold; ">Recommendation on basis of Previously watched Genres and liked:</span>');
	echo "<table class='table resume' style='width: 40%;margin-left: 400px;margin-right: 40px;margin-top: 20px;border-collapse:separate; border-spacing:0 7px;'>
	<tr>
	</tr>";
	//row []
	echo "<td id='heading' style='font-size:30px;'>TITLE</td>";
	while($row = mysqli_fetch_array($result6))
	{

	echo "<tr>";
	echo "<td style='width: 30%; color:black;'>" . $row['Content_name'] . "</td>";
	echo "</tr>";
	//echo "<tr>";
	}
	echo "</table>";

	?>

<!--<a href="userpage.php" class="btn btn-info" role="button" style='margin-left: 40px;margin-right: 40px;margin-top: 20px;'>Click here to edit your resume</a>
<form method="post" action="">
	<button class="btn btn-danger" style='margin-left: 40px;margin-right: 40px;margin-top: 20px;' type="submit" name="delete">Delete Resume</button>
</form>-->
<center><a class="btn btn-primary" href="login.php" role="button" style='margin-left: 40px;margin-right: 40px;margin-top: 20px; height: 50px; width: 120px; font-size: 30px; font-family: Roboto; background-color: red; border-color: red; color: white;font-weight: bold; margin-top: 0px;border-top: 0px;'>Logout</a></center>

</body>
</html>