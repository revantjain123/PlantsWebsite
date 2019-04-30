<?php 		
			$server="localhost";
			$user="root";
			$pass="";
			$db="websitedata";
			$conn=mysqli_connect($server,$user,$pass,$db);
			$result2=mysqli_query($conn,"SELECT * FROM maindata");
			$count2=mysqli_num_rows($result2);
		
		$f=0;
		$str1=addslashes($_GET["plantsName"]);
		$str1=trim($str1," ");
			$str1=strtolower($str1);
			$str1=preg_replace('!\s+!',' ',$str1);
			$str1=ucfirst($str1);
			
		for($k=0;$k<$count2;$k++)
		{
			$row1=mysqli_fetch_array($result2);
			$str=$row1["plantsName"];
			
			$str=trim($str," ");
			$str=strtolower($str);
			$str=preg_replace('!\s+!',' ',$str);
			$str=ucfirst($str);
			
			$check=strcmp($str,$str1);
			if($check==0)
			{
				$f=1;
				break;
			}
			
			
		}
		if($f==1)
		{
			echo "Plant name exists";
		}
		



?>