<!DOCTYPE html>
<?php
$server="localhost";
			$user="root";
			$pass="";
			$db="newwebsite";
			$conn=mysqli_connect($server,$user,$pass,$db);
				
			$plant=1;
			$i="";
			$folder1=[];
?>

<html>
	<head>
	<meta charset="utf-8">
 		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="plantpage.css">
		<link rel="stylesheet" type="text/css" href="carousel.css">
       
     	

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
			 
		
		<style>
			@media(min-width : 200px)
            {
				.row1
				{
					font-family:none;
					font-size:15px;
				 	border-bottom-style: solid;
					border-bottom-width: thin; 
					width:20%;
					margin-left:-40%;
				}
				#head
				{
					background-color:aliceblue; 
					font-size:35px; 
					font-family:cursive;
					
					
				}
			}
		
			 @media(min-width : 600px)
            {
				.row1
				{
					font-family:none;
					font-size:16px;
				 	border-bottom-style: solid;
					border-bottom-width: thin;
					width:40%;
				}
				#head
				{
					background-color:aliceblue; 
					font-size:40px; 
					font-family:cursive; 
				}
				
				
			}
			@media(min-width:800px)
            {
				.row1
				{
					font-family:none;
					font-size:20px;
				 	border-bottom-style: solid;
					border-bottom-width: thin; 
					width:60%
				}
				#head
				{
					background-color:aliceblue; 
					font-size:45px; 
					font-family:cursive; 
				}
			}
			  @media(min-width :1000px)
            {
				.row1
				{
					font-family:none;
					font-size:22px;
				 	border-bottom-style: solid;
					border-bottom-width: thin; 
					width:60%
				}
				.head
				{
					background-color:aliceblue; 
					font-size:50px; 
					font-family:cursive; 
					
				}
				
			}
		
		</style>
	
		</head>
<body>
<div class="container">
	<div class="row">
	<div class="col-sm-4 col-xs-4 d-lg-block d-md-block d-sm-none d-none">
<div class="sidenav d-lg-block d-md-block d-sm-none d-none">
	<?php $alpha=range('A','Z'); ?>
	<?php foreach($alpha as $x) {?>
  <button class="dropdown-btn"><?php echo $x; ?>
    <i class="fa fa-caret-down"></i>
  </button>
			<div class="dropdown-container">
				<?php 
					$result1=mysqli_query($conn,"SELECT * FROM diseasestable");
					$count1=mysqli_num_rows($result1);

					for($i=0;$i<$count1;$i++)
						{
						
						$row1=mysqli_fetch_array($result1);
							if ($row1['letter']==$x)
								{	
								$disease=$row1["diseaseName"];
								$numOfPlants=$row1["plantsId"];
								$arr=str_split($numOfPlants);
								$arrmain=explode(',',$numOfPlants);
				?>
					<div class="dropdown" style="color:blue;">
						
						<button class="dropdown-btn" ><?php echo "$disease"; ?>
						<i class="fa fa-caret-down"></i>
						</button>
						
						  <div class="dropdown-container">

				<?php for($j=0;$j<count($arrmain);$j++)
					{ 
					$t=(int)$arrmain[$j];
					$q="SELECT plantsName FROM maindata where id='$t'";
					$result2=mysqli_query($conn,$q);
					$row2=mysqli_fetch_array($result2);
					$plantsname=$row2["plantsName"];
				?>
			<a  href="<?php echo "plantspage.php?po=$t"; ?>"  id="<?php echo $t; ?>" ><?php echo "$plantsname"; ?></a>	
				<?php } ?>
			</div>
				</div>
				<?php } } ?>
		
  </div>
	<?php } ?>
	</div>

  </div>

		
				<?php  
						if(isset($_GET['po']))
					{
						$po=$_GET['po'];
						}
			else
			{
				$po=$plant;
			}
					$result3=mysqli_query($conn,"SELECT * FROM maindata WHERE id=$po");
						$row3=mysqli_fetch_array($result3);
							if($row3["id"]==$po)
							{
								$folder1=unserialize($row3["images"]);
								$len=count($folder1);
								
								
			?>
			
	
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 offset-md-4 offset-lg-4" >
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $folder1[0]; ?>" alt="First slide">
    </div>
		
    <div class="carousel-item">
		<?php 
								
				         for($i=1;$i<$len;$i++)
							{   ?>
		
      			<img class="d-block w-100" src="<?php echo $folder1[$i]; ?>" alt="Second slide">
							<?php } ?>
    </div>
	  
    
  </div>
			
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
			</div>

		</div>
						
				

		<?php } 
			  
			
						$result2=mysqli_query($conn,"SELECT * FROM maindata WHERE id=$po");
						
						$row1=mysqli_fetch_array($result2);
						
							if($row1["id"]==$po)
							{
								?>
			
		
		
				
					
					
			
				
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 offset-lg-4 offset-md-4" >
			<h1 align="center" class="head"><?php echo $row1['plantsName']; ?></h1>
			<br><br>
	
				<h1 align="center" class="head">CHARACTERISTICS</h1>
					<div class="table-responsive">
					<table>
						<tr>
							<td class="row1">COMMON NAME</td>
							<td class="row1"><?php echo $row1["commonName"]; ?></td>
						</tr>
						<tr>
							<td class="row1">FAMILY</td>
							<td class="row1"><?php echo $row1["family"]; ?></td>
						</tr>
						<tr>
							<td class="row1">CHEMICAL CONSTITUENTS</td>
							<td class="row1"><?php echo $row1["chemical"]; ?></td>
						</tr>
						<tr>
							<td class="row1">PARTS USED</td>
							<td class="row1"><?php echo $row1["partsUsed"]; ?></td>
						</tr>
						<tr>
							<td class="row1">DISEASES CURED</td>
							<td class="row1"><?php echo $row1["disease"]; ?></td>
						</tr>
				</table>
            </div>
						   
				</div>
			
			
		</div> 
		<?php }   ?>
		
			
		</div>
				
	
			<script>
		
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

		for (i =0;i<dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") {
			  dropdownContent.style.display = "none";
			} else {
			  dropdownContent.style.display = "block";
			}
		  });
		}
		
	</script>
	
	
		
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
				
		<script>
		
		$('.carousel').carousel({
			interval: 1000
			})
		</script>
	
	
	
	
	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	</body>
</html>






















