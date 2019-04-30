<?php
$server="localhost";
			$user="root";
			$pass="";
			$db="websitedata";
			$conn=mysqli_connect($server,$user,$pass,$db);
?>

<!DOCTYPE html>
  <html>
    <head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
  	<style>
		
			#a
			{
				display: flex;
				flex-direction: column;
			}
		.container
			{
				
				
				padding: 50px;
				
			}
			.btn 
		  {
			  height:50px;
			  width:300px;
			font-weight:300;
			  font-size: 20px
		  }
			
		</style>
     
		
    </head>
	  <body>
		  
		  <div class="container z-depth-3 " id="a" style="background-color:#B8F3B8">
			 


				  <div class="row">
					  <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
					  <h4 class="col-xs-12 col-sm-12">Search by Plantsname..</h4>
						  <form>
				   <input class="form-control mr-sm-12 mr-md-12 mr-xs-12"  name="search" type="search" id="search" placeholder="Search for plants here" autocomplete="off">
							  </form>
		  </div>
					  </div>
   <div  class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
	   <div class="here"></div> 
	   </div>
	   
</div>
				  <div class="row">
					  <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
					  <h4 class="col-xs-12 col-sm-12">Search by Common name..</h4>
						  <form>
				   <input class="form-control mr-sm-12 mr-md-12 mr-xs-12"  name="search" type="search" id="search1" placeholder="Search by common name here" autocomplete="off">
							 </form>
					  </div>
					  </div>
   <div  class="row">
	   <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
        
	   <div class="here1"></div>
	   </div>
	   
		   </div>
			  
			  
		
				   
		  </div>  
			 
				  
			
			  
			  
			 
			
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		  <script>
		$(document).ready(function(e)
		{
			$('#search').keyup(function(){
				$('.here').show();
				var x=$('#search').val();
				
				$.ajax(
					{
						type:'GET',
						url:'plantsajax.php',
						data:'q='+x,
						success:function(data)
						{
						$(".here").html(data);
						}
					,
					
					
				});
				
						});
		});
		 </script>
		   <script>
		$(document).ready(function(e)
		{
			$('#search1').keyup(function(){
				$('.here1').show();
				var x=$('#search1').val();
				
				$.ajax(
					{
						type:'GET',
						url:'plantsajax1.php',
						data:'q='+x,
						success:function(data)
						{
						$(".here1").html(data);
						}
					,
					
					
				});
				
						});
		});
		 </script>
		  
		  
      
    </body>
  </html>