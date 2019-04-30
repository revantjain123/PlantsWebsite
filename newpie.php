<?php
$conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'websitedata');
    $query="Select disease,count from newtable";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
    $rating_data[0][0]="Employee";
    $rating_data[0][1]="Rating";
    for($i=0;$i<$num;$i++)
    {
        $row=mysqli_fetch_row($result);
        $rating_data[$i+1][0]=$row[0];
        $rating_data[$i+1][1]=(int)$row[1];
    }

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
  title: "plants available for diseaese"
 };
 var chart = new google.visualization.PieChart(document.getElementById("employee_piechart"));
 chart.draw(data, options);
}
</script>
<style>
#employee_piechart
{
 width:100%;
height:100%;

}
</style>
</head>
<body>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><div id="employee_piechart" ></div></div>
 
</body>
</html>