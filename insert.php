<?php 		$server="localhost";
			$user="root";
			$pass="";
			$db="websitedata";
$conn=mysqli_connect($server,$user,$pass,$db);
	
	if(isset($_POST['submit']))
	{
		
		$plantsName=addslashes($_POST['plantsName']);
		$commonName=addslashes($_POST['commonName']);
		$family=addslashes($_POST['family']);
		$chemical=addslashes($_POST['chemical']);
		$partsUsed=addslashes($_POST['partsUsed']);
		$disease=addslashes($_POST['disease']);
		echo "<h1>your record is submitted</h1>";
		$count=count($_FILES['img']['name']);
		
		for($i=0;$i<$count;$i++)
		{
		$filename[$i]=$_FILES['img']['name'][$i];
		$tmpname[$i]=$_FILES['img']['tmp_name'][$i];
		$filetype[$i]=$_FILES['img']['type'][$i];
		$folder[$i]="photos/".$filename[$i];
		move_uploaded_file($tmpname[$i],$folder[$i]);
			
			
		}
		
		$folder1=serialize($folder);
		
		//$tre=mysqli_query($conn,"INSERT into `image` values ('$folder1')");
			
		$query="INSERT INTO `maindata` (`plantsName`,`commonName`, `family`, `chemical`, `partsUsed`, `disease`,`images`) values ('$plantsName','$commonName','$family','$chemical','$partsUsed','$disease','$folder1')";
		
		$result = mysqli_query($conn,$query);
		
		$result2=mysqli_query($conn,"SELECT * FROM maindata");
		$count2=mysqli_num_rows($result2);
		
		$result1=mysqli_query($conn,"SELECT * FROM diseasestable");
			if($result)
			{
				if($result1)
				{
					
					//$count=mysqli_num_rows($result);
						
						//$row = mysqli_fetch_array($result);
						$p=$disease;
						$arr=str_split($p);
						$exploded=count(explode(',',$p));
						$arrmain=explode(',',$p);
						//echo "$exploded";
						$count1=mysqli_num_rows($result1);
					 
						for($j=0;$j<$exploded;$j++)
						{	$f=0;
							$str1=$arrmain[$j];
						 	$str0=trim($str1," ");
						 	
						 	$str1=strtolower($str0);
						 	$str1=preg_replace('!\s+!',' ',$str1);
						 	$ch1=$str0[0];
						 	$ch1=strtoupper($ch1);
							for($k=1;$k<=$count1;$k++)
								{
									$row1=mysqli_fetch_array($result1);
									$str2=$row1['diseaseName'];
									
									$str2=trim($str2," ");
									$str2=strtolower($str2);
									$str2=preg_replace('!\s+!',' ',$str2);
									$plants=$row1['plantsId'];
									$check=strcmp($str1,$str2);
									if($check==0)
									{
										$f=1;
										
										$arr1=$plants.','.$count2;
										
										$sql="UPDATE diseasesTable SET plantsId='$arr1' where id1=$k";
										$qq=mysqli_query($conn,$sql);
										break;
									}
								}
						 	if($f==0)
							{
							 
								$str1=ucfirst($str1);
								
								$quer="INSERT INTO `diseasestable` (`diseaseName`, `plantsId`,`letter`) values ('$str1','$count2','$ch1')";
								$done=mysqli_query($conn,$quer);
								
							}
						 	
						 }
					 
						

					}
					
			
		}
		
			
		
	}
?>
		

<html>
	<head>
	
	
	</head>
	<body>
	
	
	
	</body>
</html>