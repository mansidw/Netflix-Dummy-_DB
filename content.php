<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Netflix Content Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    


    <link href="bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link  href="contsty.css" rel="stylesheet" type="text/css">
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
    
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">NETFLIX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="login.php" id="logon" style="font-size: 20px; font-weight: bold">Login<span class="sr-only glyphicon glyphicon-user">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="admin.php" id="want" style="font-size: 20px; font-weight: bold">Recommendations</a>
        </li> 
      </ul>
      
      <form class="form-inline mt-2 mt-md-0" action="search.php" method="post">
        <!--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/living.jpg" alt="Chicago">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/house.jpg" alt="Chicago">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/unbel.jpg" alt="Chicago">
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




  <div class="container marketing">

    
    <div class="row" id="man">

      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><img src="images/bb.jpg" style="padding: 4px;border: 2px solid white;"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><!--<text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>--></svg>
        <h2>Breaking Bad</h2>
        <p>A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family future.</p>
        <input type = "checkbox" id = "bb" value = "greenEggs" />
        <label for = "bb" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/office.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/>
        </svg>
        <h2>The Office</h2>
        <p>A mockumentary on a group of typical office workers, where the workday consists of ego clashes, inappropriate behavior, and tedium.</p>
        <input type = "checkbox" id = "tof" value = "greenEggs" />
        <label for = "tof" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/p&r.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Parks and Recreation</h2>
        <p>The absurd antics of an Indiana towns public officials as they pursue sundry projects to make their city a better place.</p>
        <input type = "checkbox" id = "pnr" value = "greenEggs" />
        <label for = "pnr" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><img src="images/3idiotsnew.jpg" style="padding: 4px;border: 2px solid white;"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><!--<text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>--></svg>
        <h2>3 idiots</h2>
        <p>Friends revisit their college days and recall the memories of their friend who inspired them to think differently, even as the rest of the world called them "idiots".</p>
        <input type = "checkbox" id = "3id" value = "greenEggs" />
        <label for = "3id" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/bulletface.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/>
        </svg>
        <h2>Bulletface</h2>
        <p>Horror and Revenge drive this thriller set in human trafficking underbelly of a city.</p>
        <input type = "checkbox" id = "bulletface" value = "greenEggs" />
        <label for = "bulletface" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/shaandar.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Shandaar</h2>
        <p>In the backdrop of a destination wedding in London, two families try to save their respective empires, unbeknownst to each other.</p>
        <input type = "checkbox" id = "shaandar" value = "greenEggs" />
        <label for = "shaandar" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/hotd.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>House of the dead</h2>
        <p>A group of college students travels to a mysterious island to attend a rave, which is soon taken over by bloodthirsty zombies.</p>
        <input type = "checkbox" id = "House" value = "greenEggs" />
        <label for = "House" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/devd.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>DevD</h2>
        <p>After breaking up with his childhood sweetheart, a young man finds solace in drugs. Meanwhile, a teenage girl is caught in the world of prostitution. Will they be destroyed,or find redemption?</p>
        <input type = "checkbox" id = "DevD" value = "greenEggs" />
        <label for = "DevD" style="color: white;">Wanna Add!</label>
        <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/black_fri.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Black Friday</h2>
        <p>A film about the investigations following the 1993 serial Bombay bomb blasts, told through the different stories of the people involved --police, conspirators, victims, middlemen.</p>
        <input type = "checkbox" id = "black_fri" value = "greenEggs" />
        <label for = "black_fri" style="color: white;">Wanna Add!</label>
      </div>

      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/scream.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Scream</h2>
        <p>A serialized anthology series that follows a group of teenagers being targeted by a masked serial killer.</p>
        <input type = "checkbox" id = "scream" value = "greenEggs" />
        <label for = "scream" style="color: white;">Wanna Add!</label>
      </div>

      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/bombay_v.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Bombay Velvet</h2>
        <p>An ordinary man goes against all odds and forges his destiny to become a Big Shot.</p>
        <input type = "checkbox" id = "bombay_v" value = "greenEggs" />
        <label for = "bombay_v" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/first_purge.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>First Purge</h2>
        <p>Americas third political party, the New Founding Fathers of America, comes to power and conducts an experiment: no laws for 12 hours on Staten Island.</p>
        <input type = "checkbox" id = "first_purge" value = "greenEggs" />
        <label for = "first_purge" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/chillar_party.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Chillar Party</h2>
        <p>A gang of innocent but feisty kids who lead carefree lives in Chandan Nagar colony takes on the big bad world of politics when one of their friends life is endangered.</p>
        <input type = "checkbox" id = "chillar_party" value = "greenEggs" />
        <label for = "chillar_party" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/FRIENDS.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Friends</h2>
        <p>Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.</p>
        <input type = "checkbox" id = "friends" value = "greenEggs" />
        <label for = "friends" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/tsr.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>The Shawshank Redemption</h2>
        <p>Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.</p>
        <input type = "checkbox" id = "TSR" value = "greenEggs" />
        <label for = "TSR" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/police_academy.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Police Academy</h2>
        <p>The Russian government hires the veterans of the Police Academy (1984) to help deal with the Mafia.</p>
        <input type = "checkbox" id = "pa" value = "greenEggs" />
        <label for = "pa" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/pink.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Pink</h2>
        <p>When three young women are implicated in a crime, a retired lawyer steps forward to help them clear their names.</p>
        <input type = "checkbox" id = "pink" value = "greenEggs" />
        <label for = "pink" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/type.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>TypeWriter</h2>
        <p>Three young friends in Goa plan to search an old villa for ghosts, but when a new family moves in, the homes buried past resurfaces in chilling ways.</p>
        <input type = "checkbox" id = "ty" value = "greenEggs" />
        <label for = "ty" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/better.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Better Call Saul</h2>
        <p>The trials and tribulations of criminal lawyer Jimmy McGill in the time before he established his strip-mall law office in Albuquerque, New Mexico.</p>
        <input type = "checkbox" id = "better" value = "greenEggs" />
        <label for = "better" style="color: white;">Wanna Add!</label>
      </div>


      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><img src="images/tal.jpg" style="padding: 4px; border: 2px solid white;"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2>Talaash</h2>
        <p>Inspector Surjan Shekhawat, who is dealing with a depressing past, has to investigate a high profile murder case, deal with his crumbling marriage and use the help and solace of Rosie.</p>
        <input type = "checkbox" id = "tal" value = "greenEggs" />
        <label for = "tal" style="color: white;">Wanna Add!</label>
      </div>
    
     
  </div>

</div>
  

</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js"></script>
</html>





