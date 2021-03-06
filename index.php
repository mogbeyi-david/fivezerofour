<?php include("views/includes/constants.php");?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.blacktie.co/demo/template/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 20:30:48 GMT -->
<head>

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo PROJECT.'/views/template/assets/css/bootstrap.css'?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo PROJECT.'/views/template/assets/font-awesome/css/font-awesome.css'?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo PROJECT.'/views/template/assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo PROJECT.'/views/template/assets/css/style-responsive.css'?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" action="<?php echo PROJECT.'/controllers/LoginController.php'?>">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="email" placeholder="Email Address" autofocus required>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password" required>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" name="login" href="index-2.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>

		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo PROJECT.'/views/template/assets/js/jquery.js'?>"></script>
    <script src="<?php echo PROJECT.'/views/template/assets/js/bootstrap.min.js'?>"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo PROJECT.'/views/template/assets/js/jquery.backstretch.min.js'?>"></script>
    <script>
        $.backstretch("<?php echo PROJECT.'/views/templates/assets/img/login-bg.jpg'?>", {speed: 500});
    </script>


  </body>

<!-- Mirrored from www.blacktie.co/demo/template/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2017 20:30:48 GMT -->
</html>
