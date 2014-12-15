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

	<body background="http://wallalay.com/wp-content/uploads/2014/06/Solid-Blue-4.jpg" class = "img-responsive" alt="Responsive image">
		<div id="top-nav"></div>
			<header>
				<div class="container">
					   
					
				</div>
			
			

			</header>	
				<div class="container">
					<h1><center>Track By Your Food Intake</center></h1>
				</div>
			

			<div class="container content">
				
				<!-- <?
					$msg = null;
					$arr = array('first' => 'breakfast', 'second' => 'lunch' , 'third' => 'dinner');
					$arr['fourth'] = 'midnight snack';
					//my_print ($arr);
					$meal = $arr['first'];
					$msg = "Excelent Job. Your $arr[second] has been recorded";
				?> -->
				
				
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" >
				  <div class="modal-dialog">
				    <div class="modal-content">
				    </div>
				  </div>
				</div>
				
				
				
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
                  <td><a class="btn btn-success" data-toggle="modal" data-target="#myModal" href="#">
					<i class="glyphicon glyphicon-remove"></i>
					Add
					
				</a></td>
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