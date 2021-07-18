 <p>	
  <?php
  session_start();
  // echo " <h1>".$_SESSION['username']." You are logged in as Admin</h1>"; 

  ?></p>
  <head>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
  	.resume_table{
  		margin-top: 50px;
  		margin-left: 50px;
  		font-size: 20px;
  		width: 800px;
  		border:1px solid black;

  	}
  	.user_table{
  		width: 500px;
  		background-color: black;
  		color: white;
  	}
  	.col{
  		width: 200px;
  	}
  	table{
  		
  		padding: 30px;
  	}
  </style>

  </head>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Resume building website</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="aboutadmin.php">About us</a></li>
       <li><a href="contactus.php">Contact us</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<h1 align="center">Select the user to view his/her resume</h1>
<center>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wplmini";
	$message=" ";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT username FROM resumes;";
	$result = mysqli_query($conn, $sql);
	echo "<table class='user_table table'>";
	echo "<tr><th>username</th><th>To view resume</th></tr>";
	while($rowtwo = mysqli_fetch_array($result)){
  	echo "
  		<tr>
        <td>" .$rowtwo['username'].
        "<form method='post' action=''><input type='hidden' name='hiddenuser' value='".$rowtwo['username']."'></td>
        <td> <button type='submit' name='view'class='btn btn-primary'>View</button></form>
        </td>
        </tr>";
	} 
	echo "</table>";
	?>
</center>
	<h1 style="text-align: center;">RESUME</h1>
	<center>
	 <?php
 	
	if(isset($_POST["view"]))
	{
		$uname=$_POST["hiddenuser"];



	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wplmini";
	$message=" ";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM resumes WHERE username='$uname';";

	$result = mysqli_query($conn, $sql);

	echo "<table class='table table-hover resume_table'>";

	while($row = mysqli_fetch_array($result))
	{

	echo "<tr>";
	echo "<td class='col'>Full Name</td>";
	echo "<td>" . $row['fname'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='col'>Institute</td>";
	echo "<td>" . $row['institute'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='col'>Date of birth</td>";
	echo "<td>" . $row['dob'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Phone number</td>";
	echo "<td>" . $row['phonenumber'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='col'>Qualification 1</td>";
	echo "<td>" . $row['qualification1'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Qualification 2</td>";
	echo "<td>" . $row['qualification2'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='col'>Qualification 3</td>";
	echo "<td>" . $row['qualification3'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class='col'>Extra ciricullar activities</td>";
	echo "<td>" . $row['extra'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Work Experience</td>";
	echo "<td>" . $row['wexperience'] . "</td>";
	echo "</tr>";
	}
	echo "</table>";

	}

		
		?>
	</center>



