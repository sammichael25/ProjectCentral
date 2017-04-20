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