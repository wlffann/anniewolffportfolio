<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Annie Wolff Portfolio</title>
    <meta name="description" content="Annie Wolff Portfolio">
    <meta name="author" content="Annie Wolff Portfolio">

    <link href="https://fonts.googleapis.com/css?family=Cardo|Montserrat" rel="stylesheet">
    <script src="https://use.fontawesome.com/3cbbce9453.js"></script>
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/bower_components/bootstrap/dist/css/navbar-fixed-top.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/portfolio_custom.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
  
  <?php include ("header.php") ?>

  <div class="container">
    <article>
      <h2>Welcome to my portfolio!</h2>
      <h4>Please feel free to check out my work and contact me through social media</h4>
      <h4>Or, take a moment to read</h4>
      <a href='/about.php'>About Me</a>
    </article>
    <div class="row">
      <div class="col-md-3 photo-block">
        <a href="paintings.php">
          <img src="/photos/photo_block_seminar.jpg" class="img-responsive img-circle">
        </a>
        <span>Painting</span>
      </div>

      <div class="col-md-3 photo-block">
        <a href="art.php">
          <img src="/photos/photo_block_drawing.jpg" class="img-responsive img-circle">
        </a>
        <span>Drawing</span>
      </div>

      <div class="col-md-3 photo-block">
        <a href="https://github.com/wlffann">
          <img src="/photos/artem-sapegin-176819.jpg" class="img-responsive img-circle">
        </a>
        <span>Code</span>
      </div>      

      <div class="col-md-3 photo-block">
        <a href="/costumes.php">
          <img src="/photos/Bells Are Ringing_ 2015_ Photo by Reid Thompson 3.JPG" class="img-responsive img-circle">
        </a>
        <span>Costumes</span>
      </div>

    <div class="spacer"></div>
      
    </div>

  </div> <!-- /container -->
  <?php include ("footer.php") ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
