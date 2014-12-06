<?
	include 'inc/global_includes.php';
?>
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
      	<li class = "dropdown">
      		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="caret"></span></a>
      		<ul class="dropdown-menu" role="menu">
      		<li><a href="login.php">Login</a></li>
      		<li class="divider"></li>
            <li><a href="#">Login through a Different account</a></li>
            
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
			</header>	
				<div class="container">
					<h1><center>Track By Your Food Intake</center></h1>
				</div>
			

			<div class="container content">
				
				<?
					$msg = null;
					$arr = array('first' => 'breakfast', 'second' => 'lunch' , 'third' => 'dinner');
					$arr['fourth'] = 'midnight snack';
					//my_print ($arr);
					$meal = $arr['first'];
					$msg = "Excelent Job. Your $arr[second] has been recorded";
				?>
				
				
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" >
				  <div class="modal-dialog">
				    <div class="modal-content">
				    </div>
				  </div>
				</div>
				
				<!-- Alert -->
				<? foreach($arr as $key => $meal): ?>
				<div class="alert alert-success initialy-hidden" id="myAlert">
					<button type="button" class="close" data-dismiss="alert">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
						Excelent Job. Your <?=$key?> meal i.e. <?=$meal?> has been recorded				
				</div>
				<? endforeach; ?>
				
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Calories</th>
                  <th>Fat (g)</th>
                  <th>Carbs (g)</th>
                  <th>Fiber (g)</th>
                  <th>Protien (g)</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pizza</td>
                  <td>500</td>
                  <td>18.0</td>
                  <td>5.0</td>
                  <td>2.0</td>
                  <td>3.0</td>
                  <td> Sunday 9:15am</td>
                </tr>
                <tr>
                  <td>Yogurt</td>
                  <td>80</td>
                  <td>0.5</td>
                  <td>0.0</td>
                  <td>0.0</td>
                  <td>3.0</td>
                  <td> Sunday 10:15am</td>
                </tr>
                <tr>
                  <td>Slim-Bar</td>
                  <td>100</td>
                  <td>2.0</td>
                  <td>5.0</td>
                  <td>5.0</td>
                  <td>3.0</td>
                  <td> Sunday 11:15am</td>
                </tr>
              </tbody>
            </table>
          </div>

			</div>

		<footer><center>
			<a class="btn btn-success" data-toggle="modal" data-target="#myModal" href="foodform.html">
					<i class="glyphicon glyphicon-plus"></i>
					Add
					
				</a>
				<a class="btn btn-success" data-toggle="modal" data-target="#myModal" href="#">
					<i class="glyphicon glyphicon-minus"></i>
					Delete
					
				</a>
		</center></footer>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
		<script type="text/javascript">
			$(function(){
				$("#top-nav").load("inc/_nav.html", function(){
					$(".food").addClass("active");					
				});
				$('#myModal').on('hidden.bs.modal', function (e) {
				  $("#myAlert").show();
				})
			});
		</script>
	</body>
</html>