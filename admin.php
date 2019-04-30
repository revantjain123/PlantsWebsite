<?php
$server="localhost";
			$user="root";
			$pass="";
			$db="hospital";
			$conn=mysqli_connect($server,$user,$pass,$db);
			if($conn)
			{
				echo "connected";
			}
			else
				echo "not connnected";
			
			
			if(isset($_GET["submit"]))
			{
				$f=0;
				
			$username=$_GET["username"];
			$password=$_GET["password"];
				 $result1=mysqli_query($conn,"SELECT * FROM admin");
					$count1=mysqli_num_rows($result1);

					for($i=0;$i<$count1;$i++)
						{
						
						$row1=mysqli_fetch_array($result1);
							if($row1["username"]==$username && $row1["password"]==$password )
							{
								echo "successful";
								$f=1;
							}
			
						}
				if($f==0)
				{
					header('Location:adminlogin.php?get=no');
				}
				
				
			
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

  
   
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 "  >
		     <div class="list-group grey lighten-5 z-depth-1">
              <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
				 <div class="row">
					 <div class="col s10 offset-s1">
						
					  <img class="col s12 circle  hoverable responsive-img  grey lighten-5 z-depth-1" src="<?php echo $image;?>" style="height:200px; width:250px;">
					 </div>
				  </div>
              <a href="#" class="list-group-item list-group-item-action" style="font-size:20px;font-weight:700;"><?php echo $name ; ?></a>
				<a href="#" class="list-group-item list-group-item-action"><?php echo $dept ; ?></a>
              <a href="#" class="list-group-item list-group-item-action"><?php echo $education ; ?></a>
              <a href="#" class="list-group-item list-group-item-action"><?php echo $experience ; ?></a>
              <a href="#" class="list-group-item list-group-item-action"><?php echo $profession ; ?></a>
              
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card" style="box-shadow:none;">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-2 border-right">
		                    <h4>PATIENTS</h4>
		                </div>
		                <div class="col-md-6">
		                    <button type="button" class="btn btn-sm btn-primary">Add patient</button>
		                </div>
						<div class="col-md-4">
		                    <a href="doctorlogin.php?status=<?php echo $id ?>" >Logout</a>
		                </div>
		                
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <table class="table table-hover ">
                                <thead class="bg-light ">
                                  <tr>
                                    <th>
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </th>  
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    
                                    <th>Edit</th>
                                  </tr>
                                </thead>
                                <tbody>
					<?php
							$result3=mysqli_query($conn,"SELECT * FROM appointment");
					$count3=mysqli_num_rows($result3);
				for($i=0;$i<$count3;$i++)
						{
						$row3=mysqli_fetch_array($result3);
						if($row3["dept"]==$dept && $row3["doctname"]==$name)
						{
							$pname=$row3["name"];
							$age=$row3["age"];
							$mobile=$row3["mobile"];
							$gender=$row3["gender"];
							
								
							?>
                                  <tr>
                                    <td>
                                        <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </td>  
                                    <td><a href="#"><small><?php echo $pname; ?></small></a></td>
                                    <td><small><?php echo $age; ?></small></td>
                                    <td><small><?php echo $mobile; ?></small></td>
                                    <td><small><?php echo $gender; ?></small></td>
                                    
                                    <td>
                                      <a href="prescription.php?id=<?php echo $row3['pid'];?>"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>
                                  <?php }} ?>
                                 
                                 
                                </tbody>
                              </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>
	
	
	
	<script>
	//function p()
		//{
			<?php// $update=mysqli_query($conn,"UPDATE `hospital`.`doctor` SET `status` //= '0' WHERE `doctor`.`doctorid` = $id"); ?>
//		}
	
	
	
	</script>
</body>
</html>