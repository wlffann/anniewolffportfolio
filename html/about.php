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

    <title>About - Annie Wolff Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/bower_components/bootstrap/dist/css/navbar-fixed-top.css" rel="stylesheet">

    <!--Font Awesome-->
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
            <li><a href="about.html">About</a></li>
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

  <div class="container">

    <div class="row">

      <div class="col-md-6">
        <img src="/photos/about me photo.jpg" class="img-responsive img-circle">
      </div>

      <div class="col-md-6">

        <div class="row">
          <div class="col-m">
            <h2 class="text-left content-body">Thank you for visiting my portfolio!</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-10">
            <h3>I am an artist, costume professional and aspiring web developer. I am currently based in Cincinnati, OH. If you have any comments or suggestions on my work, please reach out. I'm looking to learn anything I can.</h3>
          </div>
        </div>

      </div>

    </div>

  <div class="row">

    <div class="col-md-6 col-md-offset-3">
      <h2>Shoot me an email:</h2>

      <!--Email Me form-->
        <form class="form-horizontal" role="form" method="post" action="email.php">
         
          <div class="form-group">
            <label for="name" class="col-md-12 control-label">Name</label>
            <div class="col-md-12">
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-md-12 control-label">Email</label>
            <div class="col-md-12">
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
            </div>
          </div>
         
          <div class="form-group">
            <label for="message" class="col-md-12 control-label">Message</label>
            <div class="col-md-12">
              <textarea class="form-control" rows="4" name="message"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-10">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-contact">
            </div>
          </div>
        </form>

        <div class="form-group">
          <div class="col-md-10">
            <!-- Will be used to display an alert to the user-->
          </div>
        </div>

  </div>

  < ?php include 'footer.php'; ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
