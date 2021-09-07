<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Signup - Bootstrap Admin Template</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">
  <style>
#error-msg{ display:none }
#success-msg{ display:none }
</style>
</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				Bootstrap Admin Template				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="index.php" class="">
							Already have an account? Login now
						</a>
						
					</li>
			
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container register">
	
	<div class="content clearfix">
		
		<form name="sign-up-form"  id="sign-up-form" method="post">
		
			<h1>Signup for Free Account</h1>
            			
			<div class="alert" id="error-msg">
             <button data-dismiss="alert" class="close" type="button">×</button>
             <strong>Warning!</strong> Best check yo self, you're not looking too good.
           </div>
           
           <div class="alert alert-success" id="success-msg">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>Warning!</strong> Best check yo self, you're not looking too good.
          </div>
                                                
                                                
           
           
			<div class="login-fields">
				
				<p>Create your free account:</p>
				
				<div class="field">
					<label for="firstname">First Name:</label>
					<input type="text" id="firstname" name="first_name"  placeholder="First Name" class="login" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="lastname">Last Name:</label>	
					<input type="text" id="lastname" name="last_name"  placeholder="Last Name" class="login" />
				</div> <!-- /field -->
				
				
				<div class="field">
					<label for="email">Email Address:</label>
					<input type="text" id="email" name="email"  placeholder="Email" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" placeholder="Password" class="login"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="confirm_password">Confirm Password:</label>
					<input type="password" id="cpassword" name="cpassword"  placeholder="Confirm Password" class="login"/>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="aggree" value="1" type="checkbox" class="field login-checkbox"  tabindex="4" />
					<label class="choice" for="Field">Agree with the Terms & Conditions.</label>
				</span>
									
				<button class="button btn btn-primary btn-large" id="sign-up">Register</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="index.php">Login to your account</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signup.js"></script>

</body>

 </html>
