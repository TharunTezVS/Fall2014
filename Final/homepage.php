<!DOCTYPE html>
<html>

<head>
    <title>Fitness Tracker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="css/ico.png">
    <link href="./css/cover.css" rel="stylesheet">
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
          </div>
          <div class="modal-body">
            Users are going to be able to sign up here eventually...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand">Fitness Tracker</h3>
                        <ul class="nav masthead-nav">
                        <li><a href="login.php">Login</a></li>
                      </ul>
                    </div>
                </div>
                <div class="inner cover">
                    <h1 class="cover-heading">Track your Health!</h1>
                    <p class="lead">Join in and track your exercise and eating habits.</p>
                    <p class="lead">
                        <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#signUp">
                          Sign Up Now
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>