<?php
session_start();

// initializing variables
$username = "";
$emailid="";
$password_1="";
$password_2="";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'mansi');
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $emailid = mysqli_real_escape_string($db, $_POST['emailid']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) 
  {

    $message = "Email-Id is required";
    echo "<script type='text/javascript'>alert('$message');</script>";
    array_push($errors, "Email-Id is required"); 
  }
  if (empty($emailid)) 
  {

    $message = "Username is required";
    echo "<script type='text/javascript'>alert('$message');</script>";
    array_push($errors, "Username is required"); 
  }
  if (empty($password_1)) 
  {
    $message = "Password is required";
    echo "<script type='text/javascript'>alert('$message');</script>";
    array_push($errors, "Password is required"); 
  }
  if ($password_1 != $password_2) 
  {
    $message = "The two passwords do not match";
    echo "<script type='text/javascript'>alert('$message');</script>";
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM sitelog WHERE username='$username' OR password='$password_1' OR email_id='$emailid' LIMIT 1;";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) 
  { 
    if ($user['username'] === $username) 
    {
      $message = "Username already exists!";
      echo "<script type='text/javascript'>alert('$message');</script>";
      array_push($errors, "Username already exists");
    }
    if($user['email_id'] === $emailid)
    {
      $message = "Email-Id already exists!";
      echo "<script type='text/javascript'>alert('$message');</script>";
      array_push($errors, "Email-Id already exists");
    }
  }

  
  if (count($errors) == 0) 
  {
    //$cid=uniqid(rand());
    $query = "INSERT INTO sitelog(username,password,email_id) VALUES ('$username','$password_1','$emailid')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    header('location: infodish.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Netflix India(Register)</title>
<style>
  * {
  margin: 0px;
  padding: 0px;
}


  p{
    font-family:Roboto;
    color: white;
    font-weight: bold;

  }


  .mainone{
  position: center; 
    height: 100%;
    width: 100%;
    margin-top: 30px;
    font-size: 120%;
    }

.mainone::before{
  content: "";
  background-image: url('Netflix-ok.jpg');
  background-size: cover;
  position: absolute;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  opacity: 0.88;

}


form{
  position: absolute;
  top:  120px;
  right: 10px;
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px;
  background: rgba(0,0,0,0.3);
  border-radius: 10px 10px 10px 10px;
}



.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  color: white;
  font-weight: bold;
  font-family:Roboto;
  margin: 3px;
}


.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  font-family:Roboto;
  border: 1px;
  background: #c4c4c4;
  
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: black;
  background: red;
  border: none;
  font-weight: bold;
  border-radius: 5px;
  position: relative;
  left: 150px;
}
.col-md-8{
    position: absolute;
    background: rgba(250, 30, 30,0.7);
    padding: 0.8%;
    margin-left: 1100px;
    margin-right: 0px;
    margin-bottom: 10px;
    border-radius: 10px;
    top: 20px;
    left: 70px;
    font-family:Oswald;
    font-size: 30px;
    
  }
  .col-md-9{
    position: relative;
  }
  .fat{
    position: relative;
  }

  .newanchor:link {
  color:white;
  text-decoration:none;
  }

  .newanchor:hover{
  color:red;
  }


  </style>
  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="styles.css">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="mainone">
  <div class="fat">
     <div class="col-md-8">
          <h2>Sign In</h2>
      </div>
  </div>
  <div class="col-md-9">
      <form method="post" action="">
          <div class="input-group">
              <label>Username</label>
              <input type="text" name="username" value="<?php echo $username; ?>">
          </div>
          <div class="input-group">
              <label>Email-Id</label>
              <input type="text" name="emailid" value="<?php echo $emailid; ?>">
          </div>
          <div class="input-group">
              <label>Password</label>
              <input type="password" name="password_1">
          </div>
          <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
          </div>
          <div class="input-group">
            <button type="submit" class="btn" name="reg_user">REGISTER</button>
          </div>
          <p>
            Already a member? <a href="login.php" class="newanchor">Login</a>
          </p>
        </form>
  </div>
</div>
</body>
</html>