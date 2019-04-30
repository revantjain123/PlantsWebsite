<?php
			$server="localhost";
			$user="root";
			$pass="";
			$db="newwebsite";
			$conn=mysqli_connect($server,$user,$pass,$db);
           

#pie.php php database connection
$conn1=mysqli_connect('localhost','root');
    mysqli_select_db($conn1,'newwebsite');
    $query1="Select Disease,count from newtable";
    $result1=mysqli_query($conn1,$query1);
    $num1=mysqli_num_rows($result1);
#data printing of pie.php
    $rating_data[0][0]="Employee";
    $rating_data[0][1]="Rating";
    for($i=0;$i<$num1;$i++)
    {
        $row1=mysqli_fetch_row($result1);
        $rating_data[$i+1][0]=$row1[0];
        $rating_data[$i+1][1]=(int)$row1[1];
    }

 $encoded_data = json_encode($rating_data);

$emailErr="";
$websiteErr="";
if(isset($_POST["submit"]))
{
	echo "success";
$email="gargshreya1998@gmail.com";
$to=$_POST["emailaddress"];
if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Invalid email format"; 
}
 else
 {
$subject="New email";
$headers="From :$to\n";
$message="You mail is successfully sent to $email";
	$plantsName=$_POST["plantsName"];
	$commonName=$_POST["commonName"];
	$family=$_POST["family"];
	$chemical=$_POST["chemical"];
	$partsUsed=$_POST["partsUsed"];
	$disease=$_POST["disease"];
	$img=$_POST["img"];
	  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$img)) {
      $websiteErr = "Invalid URL"; 
    }  
	 else
	 {
	$user="$email";
	$usersubject="The request to submit the contents of plants";
	$userheaders="From:$to";
	$usermessage="
	The request is as follows:
	Plants-name:$plantsName\n 
	Common-name:$commonName\n 
	Family:$family\n     
	Chemical:$chemical\n 
	Parts-used:$partsUsed\n 
	Disease:$disease\n 
	Image-link:$img";
	mail($to,$subject,$message,$headers);
	mail($user,$usersubject,$usermessage,$userheaders);
	echo "<h3 style='background-color:green;color:white;' align='center'>Your data is submitted succesfully</h3>";
	 }
 }
}

?>

<!doctype html>
<html lang="en">
    <head>
        
        
        
        
        
        javascript for pie
        
        
        
        
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
        <style type="text/css">
            #firstupper
            {
                border: 2px solid black;
                background-color: aquamarine;
            }
            #firstnavbar
            {
                border-left: 2px solid black;
                border-bottom: 2px solid black;
                border-right: 2px solid black;
            }
            @media(max-width : 600px)
            {
                #firstupper
                {
                    height:80px;
                }
                #firstheading
                {
                    position: relative;
                    top:25%;
                }
                .nav-link
                {
                    font-size: 10px;
                    
                }
                 #search,#search1
            {
                width: 100%;
                font-size: 80%;
            }
                #family
                {
                    font-size: 80%;
                }
                 #info-text
          {
              
              font-size:90%;
              font-family: serif;
          }
            
            }
            @media(min-width:601px)
            {
                .nav-link
                {
                    font-size: 10px;
                    
                }
                 #search,#search1
            {
                width: 100%;
                font-size: 80%;
            }
                 #family
                {
                    font-size: 80%;
                }
                 #info-text
          {
              
              font-size:100%;
              font-family: serif;
          }
               
                
            }
            @media(min-width:800px)
            {
                .nav-link
                {
                    font-size: 15px;
                    
                    
                }
                 #search,#search1
            {
                width: 100%;
                font-size: 100%;
            }
                 #info-text
          {
              
              font-size:170%;
              font-family: serif;
          }
            }
             @media(min-width : 1000px)
            {
                #firstupper
                {
                    height:100px;
                }
                #firstheading
                {
                    position: relative;
                    top:20%;
                    font-size: 50px;
                }
                .nav-link
                {
                    font-size: 20px;
                    
                   
                }
                 #search,#search1
            {
                width: 100%;
                font-size: 120%;
            }
                 #info-text
          {
              
              font-size:150%;
              font-family: serif;
          }
            
            }
             @media(min-width : 1162px)
            {
                #firstupper
                {
                    height:120px;
                }
                #firstheading
                {
                    position: relative;
                    top:10%;
                    font-size: 70px;
                }
                .nav-link
                {
                    font-size: 25px;
                    
                }
                 #search,#search1
            {
                width: 100%;
                font-size: 120%;
            }
                 #info-text
          {
              
              font-size:150%;
              font-family: serif;
          }
            }
            #firstimage
            {
                width:100%;
                height:300px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("https://www.freewordpressheaders.com/wp-content/gallery/plants-trees/cowberry-fruit-tree-plant-website-header.jpg");
                border-bottom: 2px solid black;
                border-left: 2px solid black;
                border-right: 2px solid black;
            }
            #maincontainer
            {
                 border-left: 2px solid black;
                border-bottom: 2px solid black;
                border-right: 2px solid black;
            }
            #reference-container
            {
                margin-top: 30px;
                margin-bottom: 30px;
                font-family: sans-serif;
            }
            #a
            {
                padding: 50px;
            }
            .po
		{
			
			border-spacing: 40px;
			border-width:10px;
			border-color:white;
			background-color: #DCF5DF;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}
            nav
            {
                position: absolute;
                left: 0px;
                right: 0px;
                width:85%;
            }
            #pills-advancedsearch
            {
                background-color: lightcoral;
            }
           
            .adsearch-heading
                {
                    font-size: 150%;
                    color: aliceblue;
                }
            .adsearch-heading1
                {
                    font-size: 100%;
                    color: aliceblue;
                }
            #reference-heading
            {
                font-size: 200%;
                color: lightcoral;
            }
              #background
		  {
			  background-color:sandybrown;
              display: flex;
              flex-direction: column;
		  }
           #info-heading1
            {
			  box-shadow: black 3px;
			  position: relative;
			  top:10px;
		  }
           #background2
          {
              display: flex;
              flex-direction: column;
              padding:3px;
              margin-bottom: 30px;
          }
	  	#info-heading2
		  {
			  font-family:cursive;
			  font-size: 30px;
			  position: relative;
              color:red;
		  }
          .info-heading3
          {
              text-align: center;
              color: red;
              font-family: cursive;
              font-weight: 500;
              font-size: 150%;
          }
          
          th
          {
              font-family: serif;
              border: 2px solid black;
          }
          td
          {
              font-weight: 600;
          }
        #pills-request
            {
                background-color: sandybrown;
            }
            .text-muted
            {
                font-size: 100%;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row" id="firstupper">
                <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 ">
                    <h1 align="center" id="firstheading">NEUGRAPH</h1>
                </div>
            </div>
              <div class="row">
                <div class="col-xs-12" id="firstimage">
                    <img id="firstimagecontent" src="">
            </div>
            </div>
            <div class="row" id="firstnavbar">
                <div class="col-md-12" style="margin-left:50px;">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-browse-tab" data-toggle="pill" href="#pills-browse" role="tab" aria-controls="pills-browse" aria-selected="false">BROWSE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-advancedsearch-tab" data-toggle="pill" href="#pills-advancedsearch" role="tab" aria-controls="pills-advancedsearch" aria-selected="false">ADVANCED SEARCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-request-tab" data-toggle="pill" href="#pills-request" role="tab" aria-controls="pills-request" aria-selected="false">REQUEST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-references-tab" data-toggle="pill" href="#pills-references" role="tab" aria-controls="pills-references" aria-selected="false">REFERENCES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-cite-tab" data-toggle="pill" href="#pills-cite" role="tab" aria-controls="pills-cite" aria-selected="false">CITE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row">
                <div class="col-xs-12" id="maincontainer">
                    <div class="tab-content" id="pills-tabContent">
						<div class="tab-pane show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="container">
                                <div class="row">
                                    <div id="info-heading1">
                                        <h1 id="info-heading2" class="col-xs-12">Information about The Database</h1>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p id="info-text">The database provides a description of herbal plants used in the treatment of neurological
                                        diseases and disorders. The database also presents the geographical distribution of the plants.
                                        The aim behind developing of this database is to enhance the knowledge of medicinal plants
                                        which are used in the treatment/ lowering down the symptoms. The present system also promotes
                                        the maintenance, up gradation and modification of data to enhance the existing information after
                                        validating by admin.</p>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                 <div id="employee_piechart"></div>
                                                
                                            </div>
                                            <a href="newpie.php"><h3>ZOOM IN</h3></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                    <div class="row">
                                    <div class="col-xs-12">  
                                        <h2 class="info-heading3">Database Information</h2>
                                        <table class="table table-bordered">
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
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2 class=info-heading3>List of diseases</h2>
                                        <table class="table table-bordered">
                                            <tr><th>Alzheimer disease</th></tr>
                                            <tr><th>Anti-depressant</th></tr>
                                            <tr><th>Anxiety</th></tr>
                                            <tr><th>Brain Tonic</th></tr>
                                            <tr><th>Brain Tumor</th></tr>
                                            <tr><th>Dementia</th></tr>
                                            <tr><th>Epilepsy</th></tr>
                                            <tr><th>Memory booster</th></tr>
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
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane fade " id="pills-browse" role="tabpanel" aria-labelledby="pills-browse-tab">
                            <?php $alpha=range('A','Z'); ?>
                             <nav class="navbar navbar-expand-sm " style="background-color:green; margin-left:60px;">
                                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span style="background-color:yellow;" class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ">
                                        <li class="nav-item ">
                                            <?php foreach($alpha as $value)
                                                    { ?>
                                                        <a style="color:yellow;text-decoration:none;font-weight:650;" id="an" href="<?php echo "A.php?alphas=$value"; ?>" ><?php echo $value;echo str_repeat("&nbsp;", 5); } ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div id="flex-container"></div>
                        </div>
                            <div class="tab-pane fade " id="pills-advancedsearch" role="tabpanel" aria-labelledby="pills-advancedsearch-tab">
                               
                               <div class="container z-depth-3 " id="a">
                                   <div class="row">
                                   <div class="col-xs-12"><h1 align="center" class="adsearch-heading">ADVANCED SEARCH</h1></div>
                                   </div> 
                                   
                                   <div class="row">
					                   <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                           <h4 class="adsearch-heading1">Search by Plantsname..</h4>
				                            <input class="form-control mr-sm-2" name="search" type="search" id="search" placeholder="plant name" autocomplete="off">
		                              </div>
					               </div>
                                    <div  class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-12">
	                                       <div class="here"></div> 
	                                   </div>
	                               </div>
				                    <div class="row">
					                   <div class="col-xs-12 col-sm-12 col-lg-12">
					                       <h4 class="adsearch-heading1">Search by Common name..</h4>
				                            <input class="form-control mr-sm-2" name="search" type="search" id="search1" placeholder="common name" autocomplete="off">
                                        </div>
					                   </div>
                                    <div  class="row">
	                                   <div class="col-xs-12 col-sm-12 col-lg-12">
                                           <div class="here1"></div>
	                                   </div>
                                   </div>
                                </div>  
								
                        </div>
						<div class="tab-pane fade " id="pills-request" role="tabpanel" aria-labelledby="pills-request-tab">
                            <h1 align="center">SUBMIT THE DATA</h1>
		<div class="container">
			<div class="row">
				<div class=" po col-sm-12 col-md-6 col-lg-6 col-xs-12 offset-md-3 offset-lg-3">
				
		<form method="post" action="email.php" >
			<div class="form-group"> 
			<label for="plantname" class="control-label">Your email-address</label>
		<input type="text" onblur="content(this.value)" class="form-control" id="emailaddress" placeholder="Email address" name="emailaddress" required>
		 <span class="error text-danger"><?php echo $emailErr;?></span>
			</div>
			<div class="form-group"> 
			<label for="plantname" class="control-label">Plant Name</label>
		<input type="text" onblur="content(this.value)" class="form-control" id="plantname" placeholder="Plant's Name" name="plantsName" required>
			<span id="span1" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="commonname" class="control-label">Common Name</label>
			<input type="text"  placeholder="Common name " class="form-control" id="commonname" name="commonName" required>
				<span id="span2" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="family" class="control-label">Family</label>
			<input type="text"   placeholder="Family to which plant belongs " class="form-control" id="family" name="family" required>
				<span id="span3" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="chemical" class="control-label">Chemical Constituents</label>
			<input type="text"  placeholder="Chemical constituent" class="form-control" id="chemical" name="chemical" required>
				<span id="span4" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="partsused" class="control-label">Parts Used</label>
			<input type="text"  placeholder="Parts used" class="form-control" id="partsused" name="partsUsed" required>
				<span id="span5" class="text-danger"></span>
			</div>
			<div class="form-group"> 
			<label for="disease" class="control-label">Treatment of disease</label>
			<input type="text"  placeholder="Diseses cured" class="form-control" id="disease" name="disease" required>
				<span id="span6" class="text-danger"></span>
			<p class="text-muted" >Enter the disease name separated by commas</p>
			</div>
			<div class="form-group"> 
			<label for="image" class="control-label">Enter the link for the images</label>
		<input type="text" id="image" name="img" placeholder="url for images" class="form-control">
                <p class="text-muted" >Enter the multiple url separated by commas</p>
            </div>
			<span class="error text-danger"><?php echo $websiteErr;?></span>
			<div class="form-group" required> 
            <button type="submit" class="btn btn-success col-xs-12"name="submit">REQUEST</button>
			</div> 
			
		</form>
			
		</div>
			</div>
				</div>
		
						</div>
                            <div class="tab-pane fade" id="pills-references" role="tabpanel" aria-labelledby="pills-references-tab">
                                <div class="container" id="reference-container">
                                    
                                    <h1 align="center" id="reference-heading">References</h1>
                                    <ol>
                                          <li>Balkrishna, A., & Misra, L. N. (2017). Ayurvedic plants in brain disorders: The herbal hope. Journal of Traditional Medicine and Clinical Naturopathy, 6, 221.</li>	
                                         <li>Ahmed, M., Azam, K., & Nur, M. (2014). Traditional knowledge and formulations of medicinal plants used by the traditional medical practitioners of Bangladesh to treat schizophrenia like psychosis. Schizophrenia research and treatment, 2014.</li>
                                        <li>Fakir, H., Korkmaz, M., & Güller, B. (2009). Medicinal plant diversity of western Mediterrenean region in Turkey. Journal of Applied Biological Sciences, 3(2), 30-40.</li>	
                                        <li>Gürdal, B., & Kültür, Ş. (2013). An ethnobotanical study of medicinal plants in Marmaris (Muğla, Turkey). Journal of Ethnopharmacology, 146(1), 113-126.</li>	
                                        <li>Howes, M. J. R., Perry, N. S., & Houghton, P. J. (2003). Plants with traditional uses and activities, relevant to the management of Alzheimer's disease and other cognitive disorders. Phytotherapy Research: An International Journal Devoted to Pharmacological and Toxicological Evaluation of Natural Product Derivatives, 17(1), 1-18.</li>
                                        <li>Rao, R. V., Descamps, O., John, V., & Bredesen, D. E. (2012). Ayurvedic medicinal plants for Alzheimer's disease: a review. Alzheimer's research & therapy, 4(3), 22.</li>	
                                        <li>Gurib-Fakim, A. (2006). Medicinal plants: traditions of yesterday and drugs of tomorrow. Molecular aspects of Medicine, 27(1), 1-93.</li>	
                                        <li>Ahmed, M., Azam, K., & Nur, M. (2014). Traditional knowledge and formulations of medicinal plants used by the traditional medical practitioners of Bangladesh to treat schizophrenia like psychosis. Schizophrenia research and treatment, 2014.</li>	
                                        <li>Perry, E. K., Pickering, A. T., Wang, W. W., Houghton, P. J., & Perry, N. S. (1999). Medicinal plants and Alzheimer's disease: from ethnobotany to phytotherapy. Journal of Pharmacy and Pharmacology, 51(5), 527-534.</li>	
                                        <li>Perry, E. K., Pickering, A. T., Wang, W. W., Houghton, P., & Perry, N. S. (1998). Medicinal plants and Alzheimer's disease: Integrating ethnobotanical and contemporary scientific evidence. The Journal of Alternative and Complementary Medicine, 4(4), 419-428.</li>	
                                        <li>Atawodi, S. E. (2005). Antioxidant potential of African medicinal plants. African Journal of Biotechnology, 4(2), 128-133.</li>	
                                        <li>Akhondzadeh, S., Noroozian, M., Mohammadi, M., Ohadinia, S., Jamshidi, A. H., & Khani, M. (2003). Salvia officinalis extract in the treatment of patients with mild to moderate Alzheimer's disease: a double blind, randomized and placebo‐controlled trial. Journal of clinical pharmacy and therapeutics, 28(1), 53-59.</li>	
                                        <li>Akhondzadeh, S., & Abbasi, S. H. (2006). Herbal medicine in the treatment of Alzheimer's disease. American Journal of Alzheimer's Disease & Other Dementias®, 21(2), 113-118.</li>	
                                        <li>Santos-Neto, L. L. D., de Vilhena Toledo, M. A., Medeiros-Souza, P., & de Souza, G. A. (2006). The use of herbal medicine in Alzheimer's disease—a systematic review. Evidence-based complementary and alternative medicine, 3(4), 441-445.</li>	
                                        <li>Kastenholz, B., & Garfin, D. E. (2009). Medicinal plants: a natural chaperones source for treating neurological disorders. Protein and peptide letters, 16(2), 116-120.</li>	
                                        <li>http://www.planetayurveda.com/library/schizophrenia</li>
                                        <li>https://www.naturalalternativeremedy.com/12-natural-remedies-for-schizophrenia/</li>	
                                        <li>Arati Laddimath, Srinath Rao (2016). Ethno-medicinal Plants Used to Treat Some Psychological (Mental) Disorders by Traditional Practitioners of Vijayapur(Bijapur) District of Karnataka,India. International Journal of Ethanobiology and Ethanomedicine, 3(1).</li>	
                                    </ol>            
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-cite" role="tabpanel" aria-labelledby="pills-cite-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" >
            
            <div class="row" id="firstnavbar">
                <div class="col-xs-12 " style="margin-left:150px;">
                    <ul class="nav nav-pills mb-1"  id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="border-left-style:solid;border-left-width:1px;font-weight:700;color:black;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-browse-tab" data-toggle="pill" href="#pills-browse" role="tab" aria-controls="pills-browse" aria-selected="false" style="border-left-style:solid;border-left-width:1px;font-weight:700;color:black;">BROWSE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-advancedsearch-tab" data-toggle="pill" href="#pills-advancedsearch" role="tab" aria-controls="pills-advancedsearch" aria-selected="false" style="border-left-style:solid;border-left-width:1px;font-weight:700;color:black;">ADVANCED SEARCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-request-tab" data-toggle="pill" href="#pills-request" role="tab" aria-controls="pills-request" aria-selected="false" style="border-left-style:solid;border-left-width:1px;font-weight:700;color:black;">REQUEST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-references-tab" data-toggle="pill" href="#pills-references" role="tab" aria-controls="pills-references" aria-selected="false" style="border-left-style:solid;border-left-width:1px;font-weight:700;color:black;">REFERENCES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-cite-tab" data-toggle="pill" href="#pills-cite" role="tab" aria-controls="pills-cite" aria-selected="false" style="border-left-style:solid;border-right-style:solid;border-left-width:1px;border-right-width:1px;font-weight:700;color:black;" >CITE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
			<script>
		  $(document).ready(function(e)
		  {
			$('#search').keyup(function(){
				$('.here').show();
				var x=$('#search').val();
				
				$.ajax(
					{
						type:'GET',
						url:'plantsajax.php',
						data:'q='+x,
						success:function(data)
						{
						$(".here").html(data);
						}
					,
					
					
				});
				
            });
		});
		$(document).ready(function(e)
		{
			$('#search1').keyup(function(){
				$('.here1').show();
				var x=$('#search1').val();
				
				$.ajax(
					{
						type:'GET',
						url:'plantsajax1.php',
						data:'q='+x,
						success:function(data)
						{
						$(".here1").html(data);
						}
					,
					
					
				});
				
						});
		});
		</script>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
				<script>
					$(document).ready(function(){
                  $("#flex-container").load("A.php?alphas=A");
                  return false;
              });
				
            $(document).ready(function(){
                $("#an").click(function(){
                    $("#flex-container").load(this.href);
                });
			});
           
			
		</script>
         
       
    </body>
</html>