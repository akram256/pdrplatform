

<?php  include './controllers/authController.php'?>
<?php
//redirect user to login page if they're not logged in
if (empty($_SESSION['id'])) {
    header('location: index.php');
}else{

	$userin = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>The PDR Platform</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--<link rel="stylesheet"
	href="css/bootstrap.min.css">-->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"
	type="text/javascript"></script>
	<!--<script src="/pdrconcept/js/jquery.min.js" async type="text/javascript"></script>
	<script src="/pdrconcept/js/jquery.js" async type="text/javascript"></script>
	<script src="/pdrconcept/js/bootstrap.min.js" async type="text/javascript"></script>-->

<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	type="text/javascript"></script>
<script src="/pdrconcept/js/jsfunc.js" async type="text/javascript"></script>
<script src="/pdrconcept/js/pdrcScript.js" async type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var includes = $('[data-include]');
		jQuery.each(includes, function() {
			var file = 'html/' + $(this).data('include') + '.html';
			$(this).load(file);
			//alert('here');
		});
	});

    	$(document).ready(function(){
			$('#first').show();
            $('#second').hide();
            $('#third').hide();
            $('#fourth').hide();
            $('#fifth').hide();
            $('#sixth').hide();
             //alert();	
		 });
	

</script>
</head>

<body>
	<!-- CENTERING THE WEBPAGE -->
	<div class="jumbotron text-center container" style="margin-bottom: 0">
		<header>
			<h3>
				<b> PRODUCT DEVELOPMENT RESEARCH Platform</b>
			</h3>
			<p>Local Expertise in Advanced Manufacturing Processes</p>
		</header>
	</div>

	<!-- <h2>PDR PLATFORM</h2> -->
	<!--
          <p>To make the tabs toggleable, add the data-toggle="tab"
            attribute to each link. Then add a .tab-pane class with a
            unique ID for every tab and wrap them inside a div element
            with class .tab-content.</p>  -->

	<!--  
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a data-toggle="tab" href="#Home">Home</a></li>
				<li><a data-toggle="tab" href="#menu1">Tech</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Teams<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#menu21" data-toggle="tab"> Professional Experts</a></li> 
						<li><a class="dropdown-item" href="#menu22" data-toggle="tab"> Industrial Experts</a></li>
						<li><a class="dropdown-item" href="#menu23" data-toggle="tab"> Technical Experts</a></li> 
						<li><a class="dropdown-item" href="#menu24" data-toggle="tab"> Product Developers</a></li> 
						<li><a class="dropdown-item" href="#menu25" data-toggle="tab"> Research Students</a></li>
					</ul></li>
				<li><a data-toggle="tab" href="#menu3">Sponsors</a></li>
				<li><a data-toggle="tab" href="#menu4">cRoWdFund</a></li>
				<li><a data-toggle="tab" href="#menu5">Survey</a></li>
				<li><a data-toggle="tab" href="#menu6">About PDR</a></li>
			</ul>
			-->

	<nav class="navbar navbar-default container">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">PDR pLaRtFoRm</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a data-toggle="tab" href="#Home">HOME</a></li>
				<li><a data-toggle="tab" href="#menu1">TECH</a></li>
				<li><a data-toggle="tab" href="#menu3">SPONSORS</a></li>
				<li><a data-toggle="tab" href="#menu4">cRoWdFund</a></li>
				<li><a data-toggle="tab" href="#menu5">SURVEY</a></li>
				<li><a data-toggle="tab" href="#menu6">ABOUT PDR</a></li>
				<li class="dropdown"><a class="tab dropdown-toggle"
					data-toggle="dropdown" href="#">TEAMS <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#menu21" data-toggle="tab">
								Professional Experts</a></li>
						<li><a class="dropdown-item" href="#menu22" data-toggle="tab">
								Industrial Experts</a></li>
						<li><a class="dropdown-item" href="#menu23" data-toggle="tab">
								Technical Experts</a></li>
						<li><a class="dropdown-item" href="#menu24" data-toggle="tab">
								Product Developers</a></li>
						<li><a class="dropdown-item" href="#menu25" data-toggle="tab">
								Research Students</a></li>
					</ul></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!--<li><a href="#signup"><span class="glyphicon glyphicon-user"></span>
						Sign Up</a></li>-->
				<li><a href="#" data-toggle="modal"><span class="glyphicon glyphicon-user"></span>
						<?php echo $userin; ?></a></li>
				<li>
					<a href="logout.php">
						<span class="glyphicon glyphicon-log-out"></span>Log out
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="content">
		<div class="container" style="width: 100%">
			<!-- PROCESSES-->
			<div class="tab-content">
				<div id="Home" class="tab-pane fade in active">
					<h4>
						<b>THE pLaRtFoRm MEMBERS &amp; BENEFITS</b>
					</h4>
					<div data-include="products"></div>
					 
				</div>

				<!-- PRODUCTS-->
				<div id="menu1" class="tab-pane fade">
					<h4>
						<b>PROCESSES EQUIPMENT TOOLS PRODUCTS &amp; SERVICES </b>
					</h4>

					<!-- <div data-include="processes"></div>-->
					<?php 
                             include './html/processes.php';
					?>

				</div>

				<!-- DEVELOPERS-->
				<div id="menu21" class="tab-pane fade">
					<h4>Professional experts</h4>
					<div data-include="dev_professionalexperts"></div>
				</div>

				<div id="menu22" class="tab-pane fade">
					<h4>Industrial experts</h4>
					<div data-include="dev_industrialexperts"></div>
				</div>

				<div id="menu23" class="tab-pane fade">
					<h4>Technical experts</h4>
					<div data-include="dev_technicalexperts"></div>
				</div>

				<div id="menu24" class="tab-pane fade">
					<h4>Product developers</h4>
					<div data-include="dev_productdevelopers"></div>
				</div>

				<div id="menu25" class="tab-pane fade">
					<h4>Research students</h4>
					<div data-include="dev_researchstudents"></div>
				</div>

				<!-- PARTNERS-->
				<div id="menu3" class="tab-pane fade"></div>

				<!-- CROWD FUNDING-->
				<div id="menu4" class="tab-pane fade">
					<h4>
						<b>CROWD FUNDING</b>
					</h4>
					<div data-include="crowdfunding"></div>
				</div>

				<!-- ABOUT PDR-->
				<div id="menu6" class="tab-pane fade">
					<h4>
						<b>About PDR</b>
					</h4>
					<div data-include="pdrintro"></div>
					<h4>
						<b>PARTNERS</b>
					</h4>
					<div data-include="partners"></div>
				</div>


				<!-- INDUSTRY SURVEY-->
				<div id="menu5" class="tab-pane">
					<h4>
						<b>INDUSTRY SURVEY</b>
					</h4>
					<div data-include="industrialsurvey"></div>

					<div id="page-menus justify-content-center">
						<a id="get_1" style="cursor: pointer">1</a> <a id="get_2"
							style="cursor: pointer">2</a> <a id="get_3"
							style="cursor: pointer">3</a> <a id="get_4"
							style="cursor: pointer">4</a> <a id="get_5"
							style="cursor: pointer">5</a> <a id="get_6"
							style="cursor: pointer">6</a>
					</div>

					<script type="text/javascript">
						/*$(document).ready('#get_1').click(
								function() {
									$('#first').show(), $('#second').hide(), $(
											'#third').hide(), $('#fourth')
											.hide(), $('#fifth').hide(), $(
											'#sixth').hide()
								})
						$(document).ready('#get_2').click(
								function() {
									$('#first').hide(), $('#second').show(), $(
											'#third').hide(), $('#fourth')
											.hide(), $('#fifth').hide(), $(
											'#sixth').hide()
								})

						$(document).ready('#get_3').click(
								function() {
									$('#first').hide(), $('#second').hide(), $(
											'#third').show(), $('#fourth')
											.hide(), $('#fifth').hide(), $(
											'#sixth').hide()
								})

						$(document).ready('#get_4').click(
								function() {
									$('#first').hide(), $('#second').hide(), $(
											'#third').hide(), $('#fourth')
											.show(), $('#fifth').hide(), $(
											'#sixth').hide()
								})

						$(document).ready('#get_5').click(
								function() {
									$('#first').hide(), $('#second').hide(), $(
											'#third').hide(), $('#fourth')
											.hide(), $('#fifth').show(), $(
											'#sixth').hide()
								})

						$(document).ready('#get_6').click(
								function() {
									$('#first').hide(), $('#second').hide(), $(
											'#third').hide(), $('#fourth')
											.hide(), $('#fifth').hide(), $(
											'#sixth').show()
								})*/

							$(document).ready(function(){
						           $("#get_1").click(function(){
						             $('#first').show(), $('#second').hide(), $(
									   '#third').hide(), $('#fourth')
									 .hide(), $('#fifth').hide(), $(
									'#sixth').hide()
									 //alert();
						         });
						      });
							 $(document).ready(function(){
						           $("#get_2").click(function(){
						             $('#first').hide(), $('#second').show(), $(
											'#third').hide(), $('#fourth')
											.hide(), $('#fifth').hide(), $(
											'#sixth').hide()
						         });
						      });
						      $(document).ready(function(){
						           $("#get_3").click(function(){
						             $('#first').hide(), $('#second').hide(), $(
											'#third').show(), $('#fourth')
											.hide(), $('#fifth').hide(), $(
											'#sixth').hide()
						         });
						      });
						      $(document).ready(function(){
						           $("#get_4").click(function(){
						             $('#first').hide(), $('#second').hide(), $(
											'#third').hide(), $('#fourth')
											.show(), $('#fifth').hide(), $(
											'#sixth').hide()
						         });
						      });
						      $(document).ready(function(){
						           $("#get_5").click(function(){
						             $('#first').hide(), $('#second').hide(), $(
											'#third').hide(), $('#fourth')
											.hide(), $('#fifth').show(), $(
											'#sixth').hide()
						         });
						      });
						      $(document).ready(function(){
						           $("#get_6").click(function(){
						             $('#first').hide(), $('#second').hide(), $(
									   '#third').hide(), $('#fourth')
									 .hide(), $('#fifth').hide(), $(
									'#sixth').show()
									// alert();
						         });
						      });
						 

					</script>
				</div>


				<!-- SIGNUP AND LOGIN  -->
				<!-- <div id=signup > -->
				<?php  // header('location: signup.php'); ?>
				<!-- </div> -->
				<!-- <div id="login" > -->
				<?php // header('location: login.php'); ?>
				<!-- </div> -->

				<!-- Modal -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">PDR SIGN UP FORM</h4>
							</div>

							<div class="modal-body">
								<div class="container">
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
		
        <form action="signup.php" method="post">
												<div class="form-group">
													<label>Username</label> <input type="text" name="username"
														class="form-control form-control-lg"
														value=<?php echo $username; ?>>
													<!--  value="&lt;?php echo $username; ?&gt;"> -->
												</div>
												<div class="form-group">
													<label>Email</label> <input type="text" name="email"
														class="form-control form-control-lg"
														value=<?php echo $email; ?>>
												</div>
												<div class="form-group">
													<label>Password</label> <input type="password"
														name="password" class="form-control form-control-lg">
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
												Already have an account? <a href="#login" data-toggle="modal" >Login</a>
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default"
									data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>


           <!-- Modal -->
				<div class="modal fade" id="login" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">PDR LOGIN FORM</h4>
							</div>

							<div class="modal-body">
								<div class="container">
									<div class="row">
										<div class="col-md-4 offset-md-4 form-wrapper auth">
											<h3 class="text-center form-title">Login</h3>       
				
		<?php if (count($errors) > 0): ?>
  			<div class="alert alert-danger">
    			<?php foreach ($errors as $error): ?>
    			<li>
     			 <?php echo $error; ?>
    			</li>
   			 <?php endforeach;?>
  			</div>
		<?php endif;?>
		
        <form action="login.php" method="post">
          <div class="form-group">
            <label>Username or Email</label>
            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $username; ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-lg btn-block" value="enter">Login</button>
          </div>
        </form>
											<p>Don't yet have an account? <a href="#myModal" data-toggle="modal">Sign up</a></p>
										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default"
									data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>


				<div class="modal fade" id="Detail<?php echo $id; ?>" role="dialog">
					<div class="modal-dialog" style="width: 55%;">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">MACHINE DETAILS</h4>
							</div>

							<div class="modal-body">
								<div class="container">
									<div class="row">
										<div class="col-md-8 offset-md-8 form-wrapper auth">
			     
				
													<?php if (count($errors) > 0): ?>
											  			<div class="alert alert-danger">
											    			<?php foreach ($errors as $error): ?>
											    			<li>
											     			 <?php echo $error; ?>
											    			</li>
											   			 <?php endforeach;?>
											  			</div>
													<?php endif;?>

											<div class="row"><!--Products gallery -->
												<div class="col-sm-9">
													<div class="thumbnail">
														<h5><b>The PDR Platform</b></h5>
														<p>This is an interaction platform for product and process development professionals and engineers 
														who want to know where to find facilities, processes, equipment and tools, and the technical personnel 
														to support them, to create and manufacture high quality competitive goods and services for the 
														large local market.
														</p>
														<p>Many professionals and companies have access to some manufacturing processes and equipment, however,
														advances in technology mean that companies have to specialise and limit the scope of tools and processes they 
														can economically utilise. A lot of manufacturing capacity is therefore available to be explored. This platform brings 
														together these professionals and provides a forum to know what they can do for each other in line with new product 
														and process development goals. 
														</p>
													</div>
												</div>
												<div class="col-sm-3">
													  <div class="thumbnail">
													  	<a href="/pdrconcept/images/axialdrill.jpg" target="_blank">
														  <img src="/pdrconcept/images/axialdrill.jpg" alt="Lights" style="width:100%">
														<!--      <div class="caption"></div>-->
														</a>
													</div>
												</div>	
											</div>

											<div class="row"><!--Products gallery -->
												<div class="col-sm-9">
													<div class="thumbnail">
														<h5><b>The PDR Platform</b></h5>
														<p>This is an interaction platform for product and process development professionals and engineers 
														who want to know where to find facilities, processes, equipment and tools, and the technical personnel 
														to support them, to create and manufacture high quality competitive goods and services for the 
														large local market.
														</p>
														<p>Many professionals and companies have access to some manufacturing processes and equipment, however,
														advances in technology mean that companies have to specialise and limit the scope of tools and processes they 
														can economically utilise. A lot of manufacturing capacity is therefore available to be explored. This platform brings 
														together these professionals and provides a forum to know what they can do for each other in line with new product 
														and process development goals. 
														</p>
													</div>
												</div>
												<div class="col-sm-3">
													  <div class="thumbnail">
													  	<a href="/pdrconcept/images/axialdrill.jpg" target="_blank">
														  <img src="/pdrconcept/images/axialdrill.jpg" alt="Lights" style="width:100%">
														<!--      <div class="caption"></div>-->
														</a>
													</div>
												</div>	
											</div>
											
        
										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-default"
									data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>


			</div>
		</div>
		<div id="footer" style="margin-bottom: 0 fix:bottom">
			<p>PDR platform Copyright \copy</p>
		</div>
		<!-- Container -->
	</div>
	<!-- Content -->
</body>
</html>
