
<?php

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

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	
</head>
<body>
<div class="container">
	<img src="images/netflix-logo1.png" class="logo">
</div>

<div class="header">
	<div class="image">
		<h2 >The Shawshank Redemption</h2>
		<img src="images/TSR.jpg">
		<p>The Shawshank Redemption is a 1994 American drama film written and directed by Frank Darabont and starring Tim Robbins and Morgan Freeman.Adapted from the Stephen King novella Rita Hayworth and Shawshank Redemption, the film tells the story of Andy Dufresne, a banker who spends 19 years in Shawshank State Prison for the murder of his wife and her lover despite his claims of innocence. During his time at the prison, he befriends a fellow inmate, Ellis Boyd "Red" Redding, and finds himself protected by the guards after the warden begins using him in his money laundering operation. 
		</p>
	</div>
	<div class="photo">
		<img src="images/tsh1.jpg">
		<img src="images/tsh22.jpg">
		<img src="images/tsh3.jpg">
	</div>
		<div class="more">
			<h2>Popular Content</h2>
			<img src="images/FRIENDS.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/office.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/3idiots.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/Pink.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/bb.jpg">
			<input type = "checkbox" id = "chkEgg" value = "greenEggs" />
            <label for = "chkEgg" style="color: white;">Green Eggs</label>
			<img src="images/bombay_v.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/chillar_party.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/typewriter.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/shaandar.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/black_fri.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/first_purge.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/bcs.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/talaash.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/p&r.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/hotd.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/bulletface.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/devd.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/police_academy.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
			<img src="images/scream.jpg">
			<input type = "checkbox" id = "chkEggs" value = "greenEggs" />
            <label for = "chkEggs" style="color: white;">Green Eggs</label>
		</div>
</div>


</body>
</html>


