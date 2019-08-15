<?php  include 'controllers/authController.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="main.css">
<title>User verification system PHP</title>
</head>
<body>

<!-- Modal -->
	<div class="modal fade" role="dialog">
		<div class="modal-dialog">

		<!-- Modal content -->
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			</div>
			
			<div class="modal-body">
		
		<!--  Original signup -->
		<div class="row">
			<div class="col-md-4 offset-md-4 form-wrapper auth">
				<h3 class="text-center form-title">Register</h3>       
				
		<?php if (count($errors) > 0): ?>
  			<div class="alert alert-danger">
    			<?php foreach ($errors as $error): ?>
    			<li>
     			 <?php echo $error; ?>
    			</li>
   			 <?php endforeach;?>
  			</div>
		<?php endif;?>
		
        <form action="signupmodal.php" method="post">
					<div class="form-group">
						<label>Username</label> <input type="text" name="username"
							class="form-control form-control-lg"
							value=<?php echo $username; ?>>
						<!--  value="&lt;?php echo $username; ?&gt;"> -->
					</div>
					<div class="form-group">
						<label>Email</label> <input type="text" name="email"
							class="form-control form-control-lg" value=<?php echo $email; ?>>
					</div>
					<div class="form-group">
						<label>Password</label> <input type="password" name="password"
							class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<label>Password Confirm</label> <input type="password"
							name="passwordConf" class="form-control form-control-lg">
					</div>
					<div class="form-group">
						<button type="submit" name="signup-btn"
							class="btn btn-lg btn-block">Sign Up</button>
					</div>
				</form>
				<p>
					Already have an account? <a href="login.php">Login</a>
				</p>
			</div> <!--  End Col-md-4 offset -->
		</div><!--  End of class-row -->
		
		
		<div class=modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div> <!--  end modal-footer -->
		
		</div> <!--  end modal-body -->
		



	</div> <!--  end modal-content -->
	</div> <!--  end modal-dialog -->
</div> <!--  end class modal-fade -->


</body>
