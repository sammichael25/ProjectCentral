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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Login</a></li>
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
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="../templates/images/uwefind.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="../templates/images/placeholder.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">UWE-Find</h4>
                        <div class="meta">
                            <a>UWE-Find Inc &copy;</a>
                        </div>
                        <div class="card-text">
                            Class room locating web application that gives directions to classrooms around campus
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-secondary btn-md" id ="btn-today">Read More <span><i class="glyphicon glyphicon-star"></i></span></button>
                    </div>
                </div>
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