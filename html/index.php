<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Annie Wolff Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/bower_components/bootstrap/dist/css/navbar-fixed-top.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  </head>

  <body>
  <!--Start of fixed Navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-transparent">
      <div class="container">
       
        <!--header-->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Annie Wolff Portfolio</a>
        </div>
        
        <!--links-->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right navbar-links">
            <li><a href="about.php">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/paintings.html">Paintings</a></li>
                <li><a href="/art.html">Charcoal Studies</a></li>
                <li><a href="/graphic.html">Graphic Design</a></li>
                <li><a href="/ceramics.html">Ceramics</a></li>
                <li><a href="/costumes.html">Costume Design and Construction</a></li>
                <li><a href="/makers.html">Villa Madonna Maker's Club</a></li>
              </ul>
            </li>
          </ul>
        </div>
    </nav>
<!--End of Navbar-->

  <!--Header image

  <div class="parallax">
    <div class="header-image"></div>
  </div> -->

<!--Carousel-->
<div id="carousel-header" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-header" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-header" data-slide-to="1"></li>
    <li data-target="#carousel-header" data-slide-to="2"></li>
    <li data-target="#carousel-header" data-slide-to="3"></li>
    <li data-target="#carousel-header" data-slide-to="4"></li>
    <li data-target="#carousel-header" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item item-slide active">
      <img src="/photos/Slide-Stripes-Seminar.jpg" class="img-responsive">
      <div class="carousel-caption">
        <h1>Paintings</h1>
      </div>
    </div>
    <div class="item item-slide">
      <img src="/photos/tortuga-4.jpg" class="img-responsive">
      <div class="carousel-caption">
        <h1>Costume Design</h1>
      </div>
    </div>
    <div class="item item-slide">
      <img src="/photos/edited_mug_slide.jpg" class="img-responsive">
      <div class="carousel-caption">
        <h1>Drawing</h1>
      </div>
    </div>
    <div class="item item-slide">
      <img src="/photos/Macaroon_slide.jpg" class="img-responsive">
      <div class="carousel-caption">
        <h1>Graphic Design</h1>
      </div>
    </div>
    <div class="item item-slide">
      <img src="/photos/makers_slide_1.jpg" class="img-responsive">
      <div class="carousel-caption">
        <h1>Maker's Club</h1>
      </div>
    </div>
    <div class="item item-slide">
      <img src="/photos/edited_vase_slide.jpg" class="img-responsive">
      <div class="carousel-caption">
        <h1>Ceramics</h1>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-header" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Main component for a primary marketing message or call to action -->
  <div class="container">
   
    <div class="row">
      <div class="col-md-2 photo-block">
      <a href="paintings.html">
        <img src="/photos/photo_block_seminar.jpg" class="img-responsive img-circle"></a>
      </div>

      <div class="col-md-2 photo-block">
        <a href="art.html">
          <img src="/photos/photo_block_drawing.jpg" class="img-responsive img-circle">
        </a>
      </div>
      <div class="col-md-2 photo-block">
        <a href="/ceramics.html">
          <img src="/photos/edited_vase.jpg" class="img-responsive img-circle"> 
        </a>
      </div>
      <!--
      <div class="col-md-2 photo-block">
        <a href="/costumes.html">
          <img src="/photos/photo_block_tortuga.jpg" class="img-responsive img-circle">
        </a>
      </div>   --> 

      <div class="col-md-2 photo-block">
        <a href="/graphic.html">
          <img src="/photos/Rhiannon Kaleidoscope.jpg" class="img-responsive img-circle">
        </a>
      </div>      

      <div class="col-md-2 photo-block">
        <a href="/construction.html">
          <img src="/photos/Bells Are Ringing_ 2015_ Photo by Reid Thompson 3.JPG" class="img-responsive img-circle">
        </a>
      </div>

      <div class="col-md-2 photo-block">
        <a href="/makers.html">
          <img src="/photos/Villa Chess Board.jpg" class="img-responsive img-circle">
        </a>
    </div>

    <div class="spacer"></div>
      
    </div>

  </div> <!-- /container -->

<footer class="footer">

  <div class="container">
      <ul class="list-inline pull-right">

          <li class="social-btn"><a href="https://www.facebook.com/annie.wolff"><i class="fa fa-facebook social-btn-i"></i></a></li>
          <li class="social-btn"><a href="https://www.linkedin.com/in/ann-wolff-0a162280"><i class="fa fa-linkedin social-btn-i"></i></a></li>
          <li class="social-btn"><a href="https://www.instagram.com/wolffannie/"><i class="fa fa-instagram social-btn-i"></i></a></li>

      </ul>

  </div>

</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



</body>
</html>
