<?php
			$server="localhost";
			$user="root";
			$pass="";
			$db="newwebsite";
			$t="";
			$conn=mysqli_connect($server,$user,$pass,$db);
				
			$alpha=$_GET['alphas'];
?>
<html>
<head>

		<meta charset="utf-8">
 		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
     	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<style>
	#a
{
	
	font-weight: 600;
	
}

		.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 30px;
    border: none;
	font-family: serif;
		}
		

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
   
    z-index: 1;
	
}

/* Links inside the dropdown */

	.dropdown-content .aa
		{
			 color: green;
			font-size:15px;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
		@media(max-width:575.98px)
		{
			.dropdown-content .aa
				{
			 color: green;
			font-size:5px;
			padding: 8px 10px;
			text-decoration: none;
			display: block;
				}
			.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 15px;
    border: none;
	font-family: serif;
		}
			#field
			{
				width:200px;
			}
		}
		
	
	
	</style>
	
	</head>
	<body>
		
		<br>
<div class="container">
			
				
				<fieldset id="field">
					<legend><h1><?php echo $alpha ?></h1></legend>
					<div class="row">
					<?php 
						
						$result1=mysqli_query($conn,"SELECT * FROM diseasestable");
						$count1=mysqli_num_rows($result1);
						
						for($i=0;$i<$count1;$i++)
							{$p=$_GET["alphas"];
							$row1=mysqli_fetch_array($result1);
								if ($row1['letter']==$p)
									{	
						?>
						
						<div class="col-md-4 col-lg-4 col-sm-6  col-xs-12">
							
							
								<div class="dropdown">
									<button class="dropbtn"><?php 							$disease=$row1["diseaseName"];
				 						
										$numOfPlants=$row1["plantsId"];
										$arr=str_split($numOfPlants);
										$arrmain=explode(',',$numOfPlants);
										
											echo "$disease"; ?></button>
									
									
									<div class="dropdown-content">
										<?php for($j=0;$j<count($arrmain);$j++)
												{ 
										
								
									$t=(int)$arrmain[$j];
									$q="SELECT plantsName FROM maindata where id='$t'";
									$result2=mysqli_query($conn,$q);
									$row2=mysqli_fetch_array($result2);
									
									$plantsname=$row2["plantsName"];
									
										?>
					<a id="an" style="font-style:italic; font-weight:700;" class="aa" href="<?php echo "plantspage.php?po=$t"; ?>" ><?php echo "$plantsname"; ?></a>	
								
										<?php } ?>
									</div>
									
									
								</div>
								<br><br>
								
								
							
							<br><br>
						</div>
						
						<?php } 
						
						} ?>
					</div>
					<br>
					
					
				</fieldset>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		</body>
</html>