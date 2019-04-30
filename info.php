<?php

    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'websitedata');
   $query="SELECT COUNT(family), family FROM maindata GROUP BY family";
    $result=mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
    for($i=0;$i<$num;$i++)
    {
        $row=mysqli_fetch_row($result);
            $dataPoints[$i]['label']=$row[1];
         $dataPoints[$i]['y']=$row[0];
    }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  
	  <style>
	  	h1
		  {
			  font-family:cursive;
			  font-size: 30px;
			  position: relative;
			  left:30%;
              color:green;
		  }
          h2
          {
              text-align: center;
              color: green;
              font-family: cursive;
              font-weight: 500;
          }
          th
          {
              font-family: serif;
              font-style: italic;
              border: 2px solid black;
          }
          td
          {
              font-weight: 600;
          }
		  #heading
		  {
			  background-color: lightgrey;
			  box-shadow: black 3px;
			  position: relative;
			  top:10px;
		  }
		  #background
		  {
			  background-color:sandybrown;
              display: flex;
              flex-direction: column;
		  }
          p
          {
              
              font-size:20px;
              word-spacing: 3px;
              letter-spacing: 2px;
              font-style: italic;
              font-family: serif;
          }
          .flex-container
          {
              display: flex;
              flex-direction: column;
              background-color: aliceblue;
              border-radius: 15px;
              border: 2px solid black;
              padding:3px;
              margin-bottom: 30px;
          }
	  </style>
  </head>
  <body>
	  <div id="background">
		  <br>
    <div id="heading"><h1>Information about The Database</h1></div>
		  <br>
		  <br>
          <div class="container">
		  <div class="flex-container">
              <div  class="row">
                  <div class="col-sm-6">
                      <div class="container">
                          <br>
                          <br>
		  	<p>The database provides a description of herbal plants used in the treatment of neurological
diseases and disorders. The database also presents the geographical distribution of the plants.
The aim behind developing of this database is to enhance the knowledge of medicinal plants
which are used in the treatment/ lowering down the symptoms. The present system also promotes
the maintenance, up gradation and modification of data to enhance the existing information after
validating by admin.</p>
                      </div>
                      <br>
                      <br>
                      <br>
                       <div id="chartContainer" style="height: 370px; width: 100%;"></div>
		  </div>
                  <div class="col-sm-6">
                  <div class="row">
                  <div class="col-sm-12">
                      <br>
                      <div class="container">
                    <h2>Database Information</h2>
                      <table class="table table-striped table-hover table-bordered">
                        <tr>
                            <th>No of Neurological diseases</th>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th>No of herbal plants</th>
                            <td>90</td>
                        </tr>
                      </table>
                  </div>
              </div>
              </div>
                      <br>
                      <br>
                  <div class="row">
                      <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                            <h2>List of diseases</h2>
                    
                        <table class="table table-hover table-dark">
                            <tr><th>	Alzheimer disease</th></tr>
                            <tr><th>Anti-depressant</th></tr>
                            <tr><th>Anxiety</th></tr>
                      <tr> <th>Brain Tonic</th></tr>
              <tr>  <th>Brain Tumor</th></tr>
          <tr><th> Dementia</th></tr>
    <tr> <th>Epilepsy</th></tr>
<tr> <th>Memory booster</th></tr>
<tr><th>Migraine</th></tr>
<tr><th>Nerve Relaxing</th></tr>
<tr><th>Parkinson Disease</th></tr>
<tr><th>Psychosis</th></tr>
<tr><th>Schizophrenia</th></tr>
<tr><th>Seizures</th></tr>
<tr><th>Stroke</th></tr>
<tr><th>Tranquilizer</th></tr>
                        </table>
                      </div>
                      <div class="col-sm-3">
                  </div>
          </div>
                     
	  </div>
      </div>
      </div>
              

      </div>
      </div>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script>
/*window.onload = function() {
 
 
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
		dataPoints: <?php //echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}*/
</script>


<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>