<html>
	<head></head>
	<body>
	        <nav class="navbar navbar-default">
			  <div class="container-fluid">
				  <form action = "ciudadesPais.php" method="POST" class="navbar-form navbar-left" role="search">
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Introducir pais" name = "City_Name">
					</div>
					<input type="submit" class="btn btn-default" name="Submit" value="Insert"></button>
				  </form> 
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			
			
			<div class="page-header">
			    {section name=outer loop=$lista}
					<ul class="list-group">
					    <li class="list-group-item"><h3><a href='http://en.wikipedia.org/w/index.php?title={$lista[outer]->name}'>*{$lista[outer]->name}</a></h3></li>
                    </ul>					
				{/section}
			</div>
			
	<body>
</html>
