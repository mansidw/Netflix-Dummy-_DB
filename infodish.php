<?php

    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mansi";
    $uname=$_SESSION['username'];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

   /* $sql = "select * from customer1 where username = '$uname';";
    $rs = mysqli_query($conn, $sql);
    $fetchRow = mysqli_fetch_assoc($rs);*/

if(isset($_POST["checkout"]))
  {
    $firstname =  $_POST["fname"];
    $lastname =  $_POST["lname"];
    $dob = $_POST["dob"];
    //$email =  $_POST["email"];
    $phoneno = $_POST["phoneno"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $pay = $_POST["paymentMethod"];

    $sql = "UPDATE sitelog SET first_name ='$firstname',last_name='$lastname',DOB='$dob', phone_no='$phoneno',country='$country',state='$state' WHERE username='$uname';";
    //$sql = "UPDATE sitelog SET first_name ='mansi',last_name='dwivedi',DOB='2020-01-02',phone_no=9867672421,country='india',state='maha' WHERE username='mansid';";

   //$sql = "INSERT INTO customer1 VALUES (333,'$firstname','$lastname','$phoneno','$country','$state','$dob','$pay')";
    $result = mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) 
    {
      $message = "User Details successfully updated!";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header("Location:login.php");
    } 
    else 
    {
      $message = "Invalid! Try filling again.";
      echo "<script type='text/javascript'>alert('$message');</script>";
      echo "Error updating record: " . mysqli_error($conn);
    }
  }

?>
 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Fill Details</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="infosty.css" rel="stylesheet">
  </head>
  <body class="bg-light" style="background-color:black !important;">
    <div class="container">
      <div class="py-5 text-center">
          <div class="column" id="col1">
            <!--<img src="images/bb.jpg" alt="Snow" style="width:50%">-->
            <img class="d-block mx-auto mb-4" src="images/Ne.jpg" alt="" width="250" height="150">
            <h2 style="color: white; font-family: Roboto; text-align: left !important;">Personal Details</h2>
          </div>
          <div class="column" id="col2">
            <div id="yCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active" id="c1">
                  <img src="images/jam.jpg" alt="Chicago" style="height: 200px;">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="container">
                    <div class="carousel-caption text-left">
                    </div>
                  </div>
                </div>
                <div class="carousel-item" id="c2">
                  <img src="images/rp.jpg" alt="Chicago" style="height: 200px;">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="container">
                    <div class="carousel-caption">
                    </div>
                  </div>
                </div>
                <div class="carousel-item" id="c3">
                  <img src="images/oib.png" alt="Chicago" style="height: 200px;">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="container">
                    <div class="carousel-caption text-right">
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#yCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#yCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
      </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted" style="color: white !important;">Subscription Types</span>
        <!--<span class="badge badge-secondary badge-pill">3</span>-->
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h5 class="my-0" style="color: black;">Monthly</h5>
            <!--<small class="text-muted">Brief description</small>-->
          </div>
          <span class="text-muted" style="color: black !important;">Rs 199/-</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h5 class="my-0" style="color: black;">Yearly</h5>
            <!--<small class="text-muted">Brief description</small>-->
          </div>
          <span class="text-muted" style="color: black !important;">Rs 4588/-</span>
        </li>
        <li>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/tom.jpg" alt="Chicago">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="container">
                    <div class="carousel-caption text-left">
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/death.jpg" alt="Chicago">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="container">
                    <div class="carousel-caption">
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/umbr.jpg" alt="Chicago">
                  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="container">
                    <div class="carousel-caption text-right">
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </li>
      </ul>
    </div>


    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Your Details</h4>
      <form class="needs-validation" action="infodish.php" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName" style="color: white;">First name</label>
            <input type="text" class="form-control" id="firstName" name="fname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName" style="color: white;">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

       <!-- <div class="mb-3">
          <label for="username" style="color: white;">Username</label>
          <div class="input-group">
            
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>-->

       <!--<div class="mb-3">
          <label for="email" style="color: white;">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for further use.
          </div>
        </div>-->

        <div class="mb-3">
          <label for="address" style="color: white;">Phone Number</label><!--address field-->
          <input type="text" class="form-control" id="phoneno" name="phoneno">
          <div class="invalid-feedback">
            Please enter your phone number.
          </div>
        </div>

       <div class="mb-3">
          <label for="dob" style="color: white;">Date of Birth<span class="text-muted">(YYYY-MM-DD)</span></label>
          <input type="text" class="form-control" id="dob" name="dob">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country" style="color: white;">Country</label>
            <select class="custom-select d-block w-100" id="country" name="country" required>
              <option value="">Choose...</option>
              <option value="United States">United States</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="India">India</option>
              <option value="Brazil">Brazil</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state" style="color: white;">State</label>
            <select class="custom-select d-block w-100" id="state" name="state" required>
              <option value="">Choose...</option>
              <option value="Indiana">Indiana</option>
              <option value="Kansas">Kansas</option>
              <option value="Kerala">Kerala</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Minnesota">Minnesota</option>
              <option value="New Delhi">New Delhi</option>
              <option value="North Dakota">North Dakota</option>
              <option value="Parana">Parana</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Texas">Texas</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Virginia">Virginia</option>
              <option value="Wyoming">Wyoming</option>
              <option value="England">England</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <!--<div class="col-md-3 mb-3">
            <label for="zip" style="color: white;">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>-->
        </div>
        <hr class="mb-4">
        <!--<div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>-->
        <hr class="mb-4">

       <!-- <h4 class="mb-3" id="Payment">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" value="Credit Card" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit" style="color: white;">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" value="Debit Card" class="custom-control-input" required>
            <label class="custom-control-label" for="debit" style="color: white;">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" value="PayPal" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal" style="color: white;">PayPal</label>
          </div>
        </div>-->
        <!--<div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name" style="color: white;">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted" style="color: white;">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number" style="color: white;">Card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration" style="color: white;">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv" style="color: white;">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>-->
        <hr class="mb-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="checkout" style="background-color: red; color: white; border-color: red;">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020-2021 DMV</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">All Set!</a></li>
      <!--<li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>-->
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js"></script>
        <script src="infojs.js"></script></body>
</html>

