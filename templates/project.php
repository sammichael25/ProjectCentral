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
	<link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../bower_components/bootstrap/dist/css/justified-nav.css" rel="stylesheet">
	<link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
    
</head>
<body id="projects_body">
    <div class="container">
    <div class="navbar navbar navbar-static-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
       <?php
        if(isset($_SESSION["user"])){
                echo "<h3>Welcome ".$_SESSION["user"]."</h3>
                
    
    </div>
    <div class=\"navbar-collapse collapse\">
      <ul class=\"nav navbar-nav navbar-right\">
        
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><i class=\"glyphicon glyphicon-user\"></i>Student<span class=\"caret\"></span></a>
          <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Admin Page</a></li>
          </ul>
        </li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-lock\"></i> Logout</a></li>
      </ul>
    </div>";
	
	} else {
                echo "<h3>Welcome Guest</h3>
				</div>
    <div class=\"navbar-collapse collapse\" style=\"visibility: hidden\">
      <ul class=\"nav navbar-nav navbar-right\">
        
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\"><i class=\"glyphicon glyphicon-user\"></i>Student<span class=\"caret\"></span></a>
          <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Admin Page</a></li>
          </ul>
        </li>
        <li><a href=\"#\"><i class=\"glyphicon glyphicon-lock\"></i> Logout</a></li>
      </ul>
    </div>";
    }
	?>
  </div>
  </div>

     <div class="container">
        <div class="row">
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
                <div class="fill" style="background-image:url('');"></div>
                <div class="carousel-caption">
                    <h1></h1>
                </div>
            </div>
            <div class="item">
                <!-- Set the second project image using inline CSS below. -->
                <div class="fill" style="background-image:url('');"></div>
                <div class="carousel-caption">
                    <h1></h1>
                </div>
            </div>
            <div class="item">
                <!-- Set the third project image using inline CSS below. -->
                <div class="fill" style="background-image:url('');"></div>
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
    <div class="container">
        <div class="row" id="proj_row">
            
        </div>
    </div>


      

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

    <div id="product_id_sec" style='display:none'>
        <?php
            if (isset($project_id))echo $project_id;
            else echo "-1";
        ?>
    </div>



    <script src="../../bower_components/jquery/dist/jquery.js"></script>
    <script src="../../js/main.js"></script> 
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.js"></script>   
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>