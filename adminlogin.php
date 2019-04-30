
<?php

$server="localhost";
			$user="root";
			$pass="";
			$db="websitedata";
			$conn=mysqli_connect($server,$user,$pass,$db);
			
			
			if(isset($_GET["get"]))
			{
				if($_GET["get"]=="no")
				echo "<h4 align='center' style='background-color:red;color:white;'>Username or password or name is incorrect</h4>";
			}
?> 


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
      <style>
		.container
		  {
			  
				height:600px;
			  background-color: greenyellow;
		  }
		  .input-field
		  {
			  	color:black;
				font-size: 30px;
		  }
		  .btn 
		  {
			  height:50px;
			  width:300px;
			font-weight:600;
			  font-size: 30px
		  }
		
		</style>      
	  </head>
 <body>
		<div class="container z-depth-3" id="cont">
	  <h2 align="center" >Admin Login</h2>
	<div class="row">
    <form class="col s12" action="insertForm.php" method="get">
		<br>
		<div class="row">
		  <div class="input-field col s8 offset-s2">
          <i class="material-icons prefix">phone</i>
          <input name="username" id="icon_telephone" type="tel" class="validate" required>
          <label for="icon_telephone">Username</label>
        </div>
		</div>
		<div class="row">
		  <div class="input-field col s8 offset-s2">
          <i class="material-icons prefix">lock</i>
          <input name="password" id="icon" type="password" class="validate" required>
          <label for="icon">Password</label>
        </div>
			</div>
		<br>
			<div class="row">
				<button class="btn waves-effect waves-light col s4 offset-s4" type="submit" name="submit">Submit
    			<i class="material-icons right">send</i>
  				</button>
			</div>
      
		
		
    </form>
  </div>
	  </div>
		

      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>