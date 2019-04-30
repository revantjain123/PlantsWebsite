<?php
			$server="localhost";
			$user="root";
			$pass="";
			$db="websitedata";
			$conn=mysqli_connect($server,$user,$pass,$db);
?>
<html>

<head>

		<meta charset="utf-8">
 		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       
     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 
	<style>
	
		.img-thumbnail
		{
			height:200px;
			width:400px;
			padding-bottom: 80px;
			border-spacing: 80px;
			border-width:10px;
			border-color:white;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			
			
		}
		
            
           
        
       
        
        a:hover
        {
            color:white;
            text-decoration: none;
        }
        a:visited
        {
            color:green;
            text-decoration: none;
        }
       
        
        #flex-container
        {
            
            border-style:none;
			border-width: 0px;
            background-color: #ECCFC8;
            position: absolute;
			top:0px;
          	
        }
		
	
	</style>
	
</head>
	<body>

    
		<?php $alpha=range('A','Z'); ?>

    
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="padding-left: 100px;">
      <li class="nav-item " style="padding-left:2px;
                padding-right:1px;">
          <?php foreach($alpha as $value)
                { ?>
    
         
          <a  style="color: yellow;
            font-family:cursive;
            font-weight: 650;
            font-size:14px;" href="<?php echo "A.php?alphas=$value"; ?>" id="<?php echo $value ; ?>"><?php echo $value;echo str_repeat("&nbsp;", 2); } ?></a>
    </li>
      
    </ul>
  </div>
</nav>
		
<div class="flex-container" id="flexible" style="border-style:none;">
			  
				
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script>

       
      $(document).ready(function(){

		  <?php foreach($alpha as $x) { ?>
        $('#<?php echo $x ?>').click(function(e)
        {
          e.preventDefault();
          $("#flexible").load($(this).attr('href'));


        });

        <?php } ?>

      });
			
		</script>
		<script>
			$(document).ready(function(){
                  $("#flexible").load("A.php?alphas=A");
                  return false;
              });
		</script>
		
		
		
		


		


	</body>


</html>