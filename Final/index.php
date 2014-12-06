<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Fitness Tracker</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="content/css/main.css">
		
	</head>

	<body>
		<div id="top-nav"></div>
			<header>
							
				<div class="container">
					   
					
				</div>
			
			
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        

          <li><a href="index.php">Home</a></li>        
          <li><a href="food.php">Food</a></li>
          <li><a href="exercise.php">Exercise</a></li>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><i  class="glyphicon glyphicon-search"></i></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Profile</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">SignUp</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
</header>
			
				<div class="container">
					<h1><center>Fitness Tracker</center></h1>
				</div>
			

			<div class="container content">
		      <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="#">
	              <img src="holder.js/200x200/auto/lava/text:Profile" class="img-responsive img-square center-block" >
	              <h4><center>Profile</center></h4>
	              
              </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="food.php">
	              <img src="holder.js/200x200/auto/vine/text:Food" class="img-responsive img-circle center-block" >
	              <h4><center>Food</center></h4>
	              
              </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="exercise.php">
	              <img src="holder.js/200x200/auto/industrial/text:Exercise" class="img-responsive img-circle center-block" >
	              <h4><center>Exercise</center></h4>
	              
              </a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="#">
	              <img src="holder.js/200x200/auto/social/text:Social" class="img-responsive img-circle center-block" >
	              <h4><center>Social</center></h4>
	              
              </a>
            </div>
          </div>
        

			
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#top-nav").load("inc/_nav.html", function(){
					$(".index").addClass("active");					
				});
			});
		</script>
	</body>
</html>