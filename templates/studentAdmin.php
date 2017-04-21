<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project Admin Page</title> 
	<link href="../bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">	
	<link href="../bower_components/bootstrap/dist/css/memberstyle.css" rel="stylesheet" type="text/css">
    </head>


<body>   
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i>Student Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-2">  
      
      <hr>
      
      <ul class="list-unstyled">
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Settings <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse in" id="userMenu">
                <li class="active"> <a href="getprojects"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li><a href="#" onClick="$('#groupbox').hide(); $('#editbox').show()"> <i class="glyphicon glyphicon-cog"></i> Edit Project</a></li>
                <li><a href="#" onClick="$('#editbox').hide(); $('#groupbox').show()"><i class="glyphicon glyphicon-user" ></i> Group Members</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
        </li>
      </ul>
           
      <hr>

  	</div>

    <div class="col-md-10">
        <div class="row" height="400px">
        <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>  
          <hr>
      <div class="box" id="editbox" >
        <div class="panel panel-default">
          <div class="panel-heading"><h4>Edit Project page</h4></div>
            <div class="panel-body">
                   <form class="form-horizontal">
                      <fieldset>

                      <!-- Form Name -->
                      <legend>Project Details</legend>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="name">Project Name</label>  
                        <div class="col-md-4">
                        <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
                          
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="year">Year</label>  
                        <div class="col-md-4">
                        <input id="year" name="year" type="text" placeholder="" class="form-control input-md" required="">
                          
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="course">Course Code</label>  
                        <div class="col-md-4">
                        <input id="course" name="course" type="text" placeholder="" class="form-control input-md" required="">
                          
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="github">Github Link</label>  
                        <div class="col-md-4">
                        <input id="github" name="github" type="text" placeholder="" class="form-control input-md">
                          
                        </div>
                      </div>

                      <!-- Textarea -->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Project Description</label>
                        <div class="col-md-4">                     
                          <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                      </div>

                      <!-- File Button --> 
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="images">Project Media</label>
                        <div class="col-md-4">
                          <input id="images" name="images" class="input-file" type="file">
                        </div>
                      </div>

                      <!-- Button -->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="save_project"></label>
                        <div class="col-md-4">
                          <button id="save_project" name="save_project" class="btn btn-primary">Save</button>
                        </div>
                      </div>

                      </fieldset>
                      </form>
   
            </div>
          </div>
      </div>
      <div class="box" id="groupbox" style="display:none;">
        <div class="panel panel-default">
          <div class="panel-heading"><h4>Group Members</h4></div>
            <div class="panel-body">
                <div class="row">
                  <form class="form-horizontal">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Add Member</legend>

                    <!-- Search input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="searchinput">Member Name</label>
                      <div class="col-md-4">
                        <input id="searchinput" name="searchinput" type="search" placeholder="" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="save_project"></label>
                      <div class="col-md-4">
                        <button id="save_project" name="save_project" class="btn btn-primary">Add</button>
                      </div>
                    </div>

                    </fieldset>
                    </form>
                  <div class="col-sm-12">
                      <div class="col-md-3 col-sm-6">
                          <div class="card-container">
                              <div class="card">
                                  <div class="front">
                                      <div class="cover">
                                          <img src="https://www.clipartsgram.com/image/129556292-kyz84k3.jpg">
                                      </div>
                                      <div class="user">
                                          <img class="img-circle" src="https://www2.mmu.ac.uk/media/mmuacuk/style-assets/images/r-research/profile-Zeyad.jpg">
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h3 class="name">John Marvel</h3>
                                              <p class="profession">CEO</p>
                                              <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                          </div>
                                          <div class="footer">
                                              <i class="fa fa-mail-forward"></i> Auto Rotation
                                          </div>
                                      </div>
                                  </div> <!-- end front panel -->
                                  <div class="back">
                                      <div class="header">
                                          <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h4 class="text-center">Job Description</h4>
                                              <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                              <div class="stats-container">
                                                  <div class="stats">
                                                      <h4>235</h4>
                                                      <p>
                                                          Followers
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>114</h4>
                                                      <p>
                                                          Following
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>35</h4>
                                                      <p>
                                                          Projects
                                                      </p>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <div class="footer">
                                          <div class="social-links text-center">
                                              <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                              <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                              <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                          </div>
                                      </div>
                                  </div> <!-- end back panel -->
                              </div> <!-- end card -->
                          </div> <!-- end card-container -->
                      </div> <!-- end col sm 3 -->
              <!--         <div class="col-sm-1"></div> -->
                      <div class="col-md-3 col-sm-6">
                          <div class="card-container">
                              <div class="card">
                                  <div class="front">
                                      <div class="cover">
                                          <img src="https://www.clipartsgram.com/image/124089475-california-beaches-tumblr-wallpaper-3.jpg">
                                      </div>
                                      <div class="user">
                                          <img class="img-circle" src="http://www.outbrain.com/risingstars/wp-content/uploads/708x708-RS-Profile-Ashley-Callahan-400x400.jpg">
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h3 class="name">Andrew Mike</h3>
                                              <p class="profession">Web Developer</p>
                                              <p class="text-center">"Lamborghini Mercy <br>Your chick she so thirsty <br>I'm in that two seat Lambo"</p>
                                          </div>
                                          <div class="footer">
                                              <button class="btn btn-simple" onclick="rotateCard(this)">
                                                  <i class="fa fa-mail-forward"></i> Auto Rotation
                                              </button>
                                          </div>
                                      </div>
                                  </div> <!-- end front panel -->
                                  <div class="back">
                                      <div class="header">
                                          <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h4 class="text-center">Job Description</h4>
                                              <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                              <div class="stats-container">
                                                  <div class="stats">
                                                      <h4>235</h4>
                                                      <p>
                                                          Followers
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>114</h4>
                                                      <p>
                                                          Following
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>35</h4>
                                                      <p>
                                                          Projects
                                                      </p>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <div class="footer">
                                          <button class="btn btn-simple" rel="tooltip" title="" onclick="rotateCard(this)" data-original-title="Flip Card">
                                              <i class="fa fa-reply"></i> Back
                                          </button>
                                          <div class="social-links text-center">
                                              <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                              <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                              <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                          </div>
                                      </div>
                                  </div> <!-- end back panel -->
                              </div> <!-- end card -->
                          </div> <!-- end card-container -->
                      </div> <!-- end col sm 3 -->
              <!--         <div class="col-sm-1"></div> -->
                      <div class="col-md-3 col-sm-6">
                          <div class="card-container">
                              <div class="card">
                                  <div class="front">
                                      <div class="cover">
                                          <img src="http://www.hdimageson.com/wp-content/uploads/2016/05/beach-images-tumblr-300x188.jpg">
                                      </div>
                                      <div class="user">
                                          <img class="img-circle" src="https://1.bp.blogspot.com/-aruLLVlXyJM/V_t-TxTncZI/AAAAAAAAJ3k/hnQKKVmKuOY_awf1nHGTsukGfw4qrde-gCLcB/s400/2.jpg">
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h3 class="name">Inna Corman</h3>
                                              <p class="profession">Product Manager</p>

                                              <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                          </div>
                                          <div class="footer">
                                              <div class="rating">
                                                  <i class="fa fa-mail-forward"></i> Auto Rotation
                                              </div>
                                          </div>
                                      </div>
                                  </div> <!-- end front panel -->
                                  <div class="back">
                                      <div class="header">
                                          <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h4 class="text-center">Job Description</h4>
                                              <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                              <div class="stats-container">
                                                  <div class="stats">
                                                      <h4>235</h4>
                                                      <p>
                                                          Followers
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>114</h4>
                                                      <p>
                                                          Following
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>35</h4>
                                                      <p>
                                                          Projects
                                                      </p>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <div class="footer">
                                          <div class="social-links text-center">
                                              <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                              <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                              <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                          </div>
                                      </div>
                                  </div> <!-- end back panel -->
                              </div> <!-- end card -->
                          </div> <!-- end card-container -->
                      </div> <!-- end col-sm-3 -->
                      <div class="col-md-3">
                          <div class="card-container">
                              <div class="card">
                                  <div class="front">
                                      <div class="cover">
                                          <img src="https://www.clipartsgram.com/image/129556292-kyz84k3.jpg">
                                      </div>
                                      <div class="user">
                                          <img class="img-circle" src="https://www2.mmu.ac.uk/media/mmuacuk/style-assets/images/r-research/profile-Zeyad.jpg">
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h3 class="name">John Marvel</h3>
                                              <p class="profession">CEO</p>
                                              <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                          </div>
                                          <div class="footer">
                                              <i class="fa fa-mail-forward"></i> Auto Rotation
                                          </div>
                                      </div>
                                  </div> <!-- end front panel -->
                                  <div class="back">
                                      <div class="header">
                                          <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h4 class="text-center">Job Description</h4>
                                              <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                              <div class="stats-container">
                                                  <div class="stats">
                                                      <h4>235</h4>
                                                      <p>
                                                          Followers
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>114</h4>
                                                      <p>
                                                          Following
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>35</h4>
                                                      <p>
                                                          Projects
                                                      </p>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <div class="footer">
                                          <div class="social-links text-center">
                                              <a href="http://deepak646.blogspot.in/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                              <a href="http://deepak646.blogspot.in/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                              <a href="http://deepak646.blogspot.in/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                          </div>
                                      </div>
                                  </div> <!-- end back panel -->
                              </div> <!-- end card -->
                          </div> <!-- end card-container -->
                      </div>
                      <div class="col-md-3">
                          <div class="card-container">
                              <div class="card">
                                  <div class="front">
                                      <div class="cover">
                                          <img src="https://www.clipartsgram.com/image/129556292-kyz84k3.jpg">
                                      </div>
                                      <div class="user">
                                          <img class="img-circle" src="https://www2.mmu.ac.uk/media/mmuacuk/style-assets/images/r-research/profile-Zeyad.jpg">
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h3 class="name">John Marvel</h3>
                                              <p class="profession">CEO</p>
                                              <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                                          </div>
                                          <div class="footer">
                                              <i class="fa fa-mail-forward"></i> Auto Rotation
                                          </div>
                                      </div>
                                  </div> <!-- end front panel -->
                                  <div class="back">
                                      <div class="header">
                                          <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                      </div>
                                      <div class="content">
                                          <div class="main">
                                              <h4 class="text-center">Job Description</h4>
                                              <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                              <div class="stats-container">
                                                  <div class="stats">
                                                      <h4>235</h4>
                                                      <p>
                                                          Followers
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>114</h4>
                                                      <p>
                                                          Following
                                                      </p>
                                                  </div>
                                                  <div class="stats">
                                                      <h4>35</h4>
                                                      <p>
                                                          Projects
                                                      </p>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                      <div class="footer">
                                          <div class="social-links text-center">
                                              <a href="#" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                              <a href="#" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                              <a href="#" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                          </div>
                                      </div>
                                  </div> <!-- end back panel -->
                              </div> <!-- end card -->
                          </div> <!-- end card-container -->
                      </div>
                      </div>
                </div>
                  <div class="space-100"></div>
              </div>      
            </div>
          </div>
      </div>
      


<footer class="text-center"><strong>UWI Project Central</strong></a></footer>



    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../bower_components/jquery/dist/jquery.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js/admin.js"></script>
</body>
</html>