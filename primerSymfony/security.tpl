    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
	 <!-- Bootstrap core CSS -->
    <link href="https://dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    
	<body  class="center-block">
	    <div class="col-lg-6 col-lg-offset-3 text-center">
	        <h3 align='center'>{$mensaje}</h3>
		</div>
        {if $Approved=="Yes"}
		    <div class="col-lg-3 col-lg-offset-1 text-center">
                <a href='destroy.php' class="close" aria-hidden="true">Cierra sesion</button>
			</div>
		{else}
			<div class="container">
			  <form class="form-inline" action='{$url}' method='POST'>
				<h2 class="form-signin-heading">Please sign in</h2>
				<label for="inputEmail" class="sr-only">Email address</label>
				<input type="email" id="inputEmail"  name='uname' placeholder="Email address" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="inputPassword" class="form-control" name='pword' placeholder="Password" required>
				<input type="hidden" name="access_requested" value="yes">
				<div class="checkbox">
				  <label>
					<input type="checkbox" value="remember-me"> Remember me
				  </label>
				</div>
				<button class="btn btn-default" type="submit" value='Login'>Sign in</button>
			  </form>
			</div> <!-- /container -->
		{/if}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
	