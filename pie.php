<?php
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'websitedata');
   $query="SELECT COUNT(family), family FROM maindata GROUP BY family";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
echo $num;
    for($i=0;$i<$num;$i++)
    {
        $row=mysqli_fetch_row($result);
            $dataPoints[$i]['label']=$row[1];
         $dataPoints[$i]['y']=($row[0]/$num)*100;
    }
 ?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "theme2",
	animationEnabled: true,
	title: {
		text: "Herbal Plants Distribution by Family Wise"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                 