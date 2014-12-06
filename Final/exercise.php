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
					<h1><center>Track by Your Workout</center></h1>
				</div>
			</header>
            <a class="btn btn-success" data-toggle="modal" data-target="#myModal" href="#">
					<i class="glyphicon glyphicon-plus"></i>
					Add
					
				</a>
				<a class="btn btn-success" data-toggle="modal" data-target="#myModal" href="#">
					<i class="glyphicon glyphicon-minus"></i>
					Delete
			<div class="container content">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Place</th>
                  <th>Type</th>
                  <th>Distance (m)</th>
                  <th>Calories Burned</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Treadmill</td>
                  <td>Running</td>
                  <td>18.0</td>
                  <td>500</td>
                  <td> Sunday 9:15am</td>
                </tr>
                <tr>
                  <td>Treadmill</td>
                  <td>Running</td>
                  <td>18.0</td>
                  <td>500</td>
                  <td> Sunday 9:15am</td>
                </tr>
                <tr>
                  <td>The tripping fields</td>
                  <td>Biking</td>
                  <td>18.0</td>
                  <td>500</td>
                  <td> Sunday 9:15am</td>
                </tr>
              </tbody>
            </table>
          </div>

			</div>

			
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#top-nav").load("inc/_nav.html", function(){
					$(".exercise").addClass("active");					
				});
			});
		</script>
	</body>
</html>