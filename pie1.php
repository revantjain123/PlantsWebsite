<?php
$conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'websitedata');
    $query="Select * from newtable";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
echo $num;
for($j=1;$j<$num-1;$j++)
{

$row=mysqli_fetch_array($result);
$rating_data = array(
 array('Employee', 'Rating'),
 array($row["Disease"],$row["count"]),
 array('Manoj',49)
);
}
/*$arr=array();
$arr[]="Employ";
$arr[]=25;
$arr1[0]=$arr;*/
/*$rating_data=array();
for($j=0;$j<3;$j++)
{
$dataPoints=array();
	$row=mysqli_fetch_row($result);
	for($i=0;$i<2;$i++)
{
   $dataPoints[$i]=$row[$i];
 }
$rating_data[$j]=$dataPoints;
}
for($k=0;$k<3;$k++)
{
$new =array_map(function ($e){
			  return $e[$k]; 
				},$rating_data);
}
print_r($rating_data);
print_r($e);*/

 $encoded_data = json_encode($rating_data);
?>

<html>
<head>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() 
{
 var data = google.visualization.arrayToDataTable(
 <?php  echo $encoded_data; ?>
 );
 var options = {
  title: "Employee Ratings"
 };
 var chart = new google.visualization.PieChart(document.getElementById("employee_piechart"));
 chart.draw(data, options);
}
</script>
<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#FAFAFA;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#585858;
}
#wrapper h1 p
{
 font-size:18px;
}
#employee_piechart
{
 padding:0px;
 width:600px;
 height:400px;
 margin-left:190px;
}
</style>
</head>
<body>
 <div id="employee_piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>