<?php
			$server="localhost";
			$user="root";
			$pass="";
			$db="websitedata";
			$conn=mysqli_connect($server,$user,$pass,$db);
?>

<!doctype html>
<html lang="en">
    <head>
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
                    font-family: cursive;
                    font-style: italic;
                }
            
            }
            @media(min-width:601px)
            {
                .nav-link
                {
                    font-size: 10px;
                    font-family: cursive;
                    font-style: italic;
                }
                
            }
            @media(min-width:800px)
            {
                .nav-link
                {
                    font-size: 15px;
                    font-family: cursive;
                    font-style: italic;
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
                    font-family: cursive;
                    font-style: italic;
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
                    font-family: cursive;
                    font-style: italic;
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
            .btn 
		  {
			  height:50px;
			  width:300px;
			font-weight:300;
			  font-size: 20px
		  }
            nav
            {
                position: absolute;
                left: 0px;
                right: 0px;
                width:100%;
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
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">HOME</a>
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
						<div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						</div>
                        <div class="tab-pane fade " id="pills-browse" role="tabpanel" aria-labelledby="pills-browse-tab">
                            <?php $alpha=range('A','Z'); ?>
                             <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <?php foreach($alpha as $value)
                                                    { ?>
                                                        <a id="an" href="<?php echo "A.php?alphas=$value"; ?>" ><?php echo $value;echo str_repeat("&nbsp;", 4); } ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div id="flex-container"></div>
                        </div>
                            <div class="tab-pane fade " id="pills-advancedsearch" role="tabpanel" aria-labelledby="pills-advancedsearch-tab">
                               <div class="container z-depth-3 " id="a" style="background-color:#B8F3B8">
                                   <div class="row">
					                   <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
					                       <h4>Search by Plantsname..</h4>
				                            <input class="form-control mr-sm-2" style="width:500" name="search" type="search" id="search" placeholder="Search for plants here" autocomplete="off">
		                              </div>
					               </div>
                                    <div  class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-12">
	                                       <div class="here"></div> 
	                                   </div>
	                               </div>
				                    <div class="row">
					                   <div class="col-xs-12 col-sm-12 col-lg-12">
					                       <h4>Search by Common name..</h4>
				                            <input class="form-control mr-sm-2" style="width:500" name="search" type="search" id="search1" placeholder="Search by common name here" autocomplete="off">
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
						</div>
                            <div class="tab-pane fade" id="pills-references" role="tabpanel" aria-labelledby="pills-references-tab">
                                <div class="container" id="reference-container">
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
		<div class="container">
            
            <div class="row" id="firstnavbar">
                <div class="col-md-8 offset-md-2">
                    <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size:17px;font-family:none;border-left-style:solid;border-left-width:1px;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-browse-tab" data-toggle="pill" href="#pills-browse" role="tab" aria-controls="pills-browse" aria-selected="false" style="font-size:17px;font-family:none;border-left-style:solid;border-left-width:1px;">BROWSE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-advancedsearch-tab" data-toggle="pill" href="#pills-advancedsearch" role="tab" aria-controls="pills-advancedsearch" aria-selected="false" style="font-size:17px;font-family:none;border-left-style:solid;border-left-width:1px;">ADVANCED SEARCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-request-tab" data-toggle="pill" href="#pills-request" role="tab" aria-controls="pills-request" aria-selected="false" style="font-size:17px;font-family:none;border-left-style:solid;border-left-width:1px;">REQUEST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-references-tab" data-toggle="pill" href="#pills-references" role="tab" aria-controls="pills-references" aria-selected="false" style="font-size:17px;font-family:none;border-left-style:solid;border-left-width:1px;">REFERENCES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-cite-tab" data-toggle="pill" href="#pills-cite" role="tab" aria-controls="pills-cite" aria-selected="false" style="font-size:17px;font-family:none;border-left-style:solid;border-left-width:1px;" >CITE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<script>
		
		</script>
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