<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../login.php");
  }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flixon</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
 <link rel="stylesheet" href="movieInner.css">
 
</head>

<body background="Background.jpeg">
  <nav class="navbar navbar-expand-sm background-color ">
    <a class="navbar-brand" href="index.html" ><h1 style="color:red;"><b>Flixon</b></h1></a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="Movie.html" data-toggle="tooltip" title="Movies">&nbsp&nbsp&nbsp<img src="Icons/Movies.png" alt="Movies"style="width:30px;height:30px;"> &nbsp&nbsp&nbsp</a>
                <h6 style="color:white; font-size:90%" >&nbsp;&nbsp;&nbsp;&nbsp;Movies</h6>
                <ul class ="dropdown">
                  <li><a class="dropdown-item" href="Movie.html" >List Of Movies</a></li>
                  <li><a class="dropdown-item" target="_blank" href="Chart Bar.html">Flixon VS User Ratings</a></li>
              </ul>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Games/Index.html" data-toggle="tooltip" title="Games">&nbsp&nbsp&nbsp<img src="Icons/Games.png" alt="Games"style="width:30px;height:30px;"> &nbsp&nbsp&nbsp</a>
                <h6 style="color:white; font-size:90%">&nbsp;&nbsp;&nbsp;&nbsp;Games</h6>
              </li>
             <li class="nav-item active">
                <a class="nav-link" href="Music.html" data-toggle="tooltip" title="Music">&nbsp&nbsp&nbsp<img src="Icons/Music.png" alt="Music"style="width:30px;height:30px;"> &nbsp&nbsp&nbsp</a>
                <h6 style="color:white; font-size:90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Music</h6>
                <ul class ="dropdown">
                  <li><a class="dropdown-item" target="_self" href="sort.html">Sort Songs by Name & Rating</a></li>
                <!-- <li><a target="_self" href="sortRating.html">Sort Songs by Rating</a></li> -->
                <li><a  class="dropdown-item" target="_self" href="UpcomingEvents.html">Upcoming Music Events</a></li>
              </ul>
              </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <?php  if (isset($_SESSION['username'])) : ?>
          <p align="right" style="color: red;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
          <p align="right"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
      </form>
    </div>
</nav>



  <br/>
  <br/>
  <br/>
  <div class="container">
  <h3><b>New Releases In Theaters</b></h3>
  <div class="row">
    <div class="col-xs-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-4"><a href="HichkiTrailer.html"><img src="hichki.jpg" style="width:300px;height:200px;"   class="img-responsive"  ></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="October.html"><img src="October.jpeg"   style="width:300px;height:200px;" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="Baaghi2.html"><img src="Baaghi.jpg"  style="width:300px;height:200px;"  class="img-responsive" ></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="Raazi.html"><img src="Raazi.jpg"     style="width:300px;height:200px;" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="Quarib_Quarib_Single.html"><img src="Quarib_Quarib_Single.jpg"     style="width:300px;height:200px;"  class="img-responsive"></a></div>
          </div>
         

          

          <!--  Example item end -->
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>






<br/><br/>
<div class="container">
  <h3><b>Coming Soon  In Theaters</b></h3>
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theComingCarousel">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-4"><a href="Blackmail.html"><img src="Blackmail.jpg" style="width:300px;height:200px;"   class="img-responsive"  ></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="Missing.html"><img src="Missing.jpg"   style="width:300px;height:200px;" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="Nanu Ki Jaanu.html"><img src="Nanu Ki Jaanu.jpg"  style="width:300px;height:200px;"  class="img-responsive" ></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="StudentOfTheYear2.html"><img src="StudentOfTheYear2.jpg"     style="width:300px;height:200px;"  class="img-responsive"></a></div>
          </div>
          <!-- add  more items here -->
          <!-- Example item start:  -->

          <!--  Example item end -->
        </div>
        <a class="left carousel-control" href="#theComingCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theComingCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>

<br/><br/>
<!-- new -->
<div class="container">
  <h3><b>Movies of the Week</b></h3>
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theWeekCarousel">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-4"><a href="Padmaavat.html"><img src="Padmaavat.jpg" style="width:300px;height:200px;"   class="img-responsive"  ></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="Lai Bhaari.html"><img src="LaiBhari.jpg"   style="width:300px;height:200px;" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="Student Of The Year 2.html"><img src="StudentOfTheYear2.jpg"     style="width:300px;height:200px;"  class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-4"><a href="Quarib_Quarib_Single.html"><img src="Quarib_Quarib_Single.jpg"     style="width:300px;height:200px;"  class="img-responsive"></a></div>
          </div>
          
          <!-- add  more items here -->
          <!-- Example item start:  -->

          

          <!--  Example item end -->
        </div>
        <a class="left carousel-control" href="#theWeekCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theWeekCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	<script src="multilineCar.js"></script>
  <br>
  <br>
  <br>

  <!--Footer starts here-->
  <footer>
      Copyright &copy; 2017 Flixon. All rights reserved<br>
      <a href="https://mail.google.com/mail/?view=cm&fs=1&to=flixonmovies@gmail.com" target="_blank">flixonmovies@gmail.com</a>
      <br>
      <br>
      <a href="terms&conditions.html" target="_blank">***Terms & Conditions***</a>
      </footer>
            <!--Footer ends here-->

</body>
</html>
