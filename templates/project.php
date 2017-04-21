<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Project Central</title>
	
	<!-- Bootstrap core CSS -->
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bower_components/bootstrap/dist/css/justified-nav.css" rel="stylesheet">
	<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
</head>
<body id="projects_body">
    <div class="container">

      <div class="masthead">
    <?php
        if(isset($_SESSION["user"])){
                echo "<h3>Welcome ".$_SESSION["user"]."</h3>";
                } else {
                echo "<h3>Welcome Guest</h3>";
                }
    ?>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="/projects.php">Home</a></li>
            <?php
        if(!isset($_SESSION["user"])){
                echo "<li><a href=\"/index.php\">Login</a></li>";
                }
    ?>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Project Central UWI!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" id ="btn-today" href="#" role="button">Get started today <span><i class="glyphicon glyphicon-star"></i></span></a></p>
      </div>

     <div class="container">
        <div class="row" id="project_row">
            <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first project image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/');"></div>
                <div class="carousel-caption">
                    <h1></h1>
                </div>
            </div>
            <div class="item">
                <!-- Set the second project image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/');"></div>
                <div class="carousel-caption">
                    <h1></h1>
                </div>
            </div>
            <div class="item">
                <!-- Set the third project image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>
        </div>
        
    </div>
      

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->



    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../bower_components/jquery/dist/jquery.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>
    <script src="../js/main.js"></script>    
</body>
</html>