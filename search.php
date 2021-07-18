<!DOCTYPE html>
<html>
<head>
  <title>Search Page</title>
</head>
<link href="seasty.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<body>
  <div id="N">
    <img src="images/Ne.jpg" height="20%" width="100%">
  </div>
  <form action="search.php" method="post" id="inp">
    <div class="search-box">
      <input type="text" name="search-btn" placeholder="Search here" id="write">
      <input type ="submit" name="submit" value="Search" id="search">  
    </div>
</form>
<div>
  <form class="form-inline mt-2 mt-md-0" action="Acontdish.php" method="post">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:white; background-color: red; width: 100px; height: 50px; border-color: red; font-family: Roboto; font-size: 20px;" >Get Back</button>
</form>
</div>



</body>
</html>   

<?php

      $con= mysqli_connect('localhost','root','') or die ("could not connect");
      mysqli_select_db($con,'mansi') or die ("could not connect Database");

      //connect

      if(isset($_POST['search-btn']))
      {
        $searchq = $_POST['search-btn'];
        $searchq= preg_replace("#[^0-9a-z]#i","",$searchq);

        $req = "SELECT * FROM content WHERE Content_name LIKE '%$searchq%'" or die("could not search");
        

        $query = mysqli_query($con,$req);
        $count = mysqli_num_rows($query);

        if($count == 0)
        {
          echo('There was no search results!<br>');
        }
        else
        {
          while($row = mysqli_fetch_array($query))
          {
            $fname= $row['Content_name'];
            $des = $row['Description'];
            $type=$row['Content_type'];
            $ryear=$row['Release_year'];
            $cont = $row['Country'];
            $dur = $row['Duration'];
            $rat = $row['Rating'];
            $dir = $row['Director'];

            echo "<font color='white' font face='Roboto' size='10px'>".$fname."<br></font>";
            echo('<span style="color: white; font-family:Roboto;">Description : </span>');
            echo "<font color='white' font face='Roboto'>".$des."<br></font>";
            echo('<span style="color: white; font-family:Roboto;">Content Type : </span>');
            echo "<font color='white' font face='Roboto'>".$type."<br></font>";
            echo('<span style="color: white; font-family:Roboto;">Release Year : </span>');
            echo "<font color='white' font face='Roboto'>".$ryear."<br></font>";
            echo('<span style="color: white; font-family:Roboto;">Release Country : </span>');
            echo "<font color='white' font face='Roboto'>".$cont."<br></font>";
            echo('<span style="color: white; font-family:Roboto;">Duration : </span>');
            echo "<font color='white' font face='Roboto'>".$dur."<br></font>";
            echo('<span style="color: white; font-family:Roboto;">Rating : </span>');
            echo "<font color='white' font face='Roboto'>".$rat."<br></font>";
            echo('<span style="color: white; font-family:Roboto;">Director : </span>');
            echo "<font color='white' font face='Roboto'>".$dir."<br></font>";
            echo("<br>");
          }

        }

        $req = "SELECT  DISTINCT cast FROM discont WHERE Content_name LIKE '%$searchq%'" or die("could not search");
        

        $query = mysqli_query($con,$req);
        $count = mysqli_num_rows($query);

        if($count == 0)
        {
          echo('<span style="color: white; font-family:Roboto;">There were no search results!</span>');
        }
        else
        {
          echo('<span style="color: white; font-family:Roboto;">Cast : <br></span>');
          while($row = mysqli_fetch_array($query))
          {
            $cast = $row['cast'];
            echo("\t");
            echo "<font color='white' font face='Roboto'>".$cast."<br></font>";
           
          }
           echo("<br>");
        }

        $req = "SELECT  DISTINCT genre FROM discont WHERE Content_name LIKE '%$searchq%'" or die("could not search");
        
        $query = mysqli_query($con,$req);
        $count = mysqli_num_rows($query);

        if($count == 0)
        {
          echo('<span style="color: white; font-family:Roboto;">There were no search results!</span>');
        }
        else
        {
          echo('<span style="color: white; font-family:Roboto;">Genre : <br></span>');
          while($row = mysqli_fetch_array($query))
          {
            $genre = $row['genre'];
            echo("\t");
            echo "<font color='white' font face='Roboto'>". $genre ."<br></font>";
            
          }

        }

  }

     // }
   // }


        
?>

