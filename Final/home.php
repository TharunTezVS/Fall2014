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