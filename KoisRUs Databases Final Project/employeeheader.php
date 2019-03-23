<!DOCTYPE html>
<!--On each page a header will display.-->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  			<link rel="stylesheet" type="text/css" href="../productStyle.css">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<br>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>				
					<span class="icon-bar"></span> 					
					<span class="icon-bar"></span> 
				    </button>
			    </div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="employeeHome.php">Home</a></li>
					<!-- Creates the dropdown for Products-->
			    	<div class="dropdown">
			        	<a href = "employeeProduct1.php"><button class="dropbtn">Products</button></a>
			        	<div class="dropdown-content">
			            	<a href = "employeeProduct1.php">Fishing Poles and Lines</a>
							
			            	<a href = "employeeProduct2.php">Baits and Hooks</a>
							
			            	<a href = "employeeProduct3.php">Apparel</a>
							
			            	<a href = "employeeProduct4.php">Books</a>
			         	</div>
			      	</div>
                            <!-- add search form -->
                            <form class="navbar-form navbar-right" role="search" method="post" action="search.php">
                                <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Search this site" name="searchterm">
                                   <span class="input-group-btn">
                                     <button type="submit" class="btn btn-default">
                                     <span class="glyphicon glyphicon-search"></span>
                                     </button>
                                   </span>
                                </div>
                            </form>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><span class="glyphicon glyphicon-user"></span>My Cart</a></li>
					 <li><a href="customersignup.php"><span class="glyphicon glyphicon-user"></span>Create Customer</a></li>
                    <li><a href="employeeCreateAccount.php"><span class="glyphicon glyphicon-user"></span>Create Employee</a></li>
					<li><a href="customerlogout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
				</ul>
			</div>
			</div>
		</nav>
	</body>
</html>