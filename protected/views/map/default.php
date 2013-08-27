

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>VawHack</title>
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/leaflet.css">
	<link rel="stylesheet" href="css/responsive-style.css">
	<link rel="stylesheet" href="css/dropkick.css">
	
<?php  
  // $baseUrl = Yii::app()->baseUrl; 
  // $cs = Yii::app()->getClientScript();
  // $cs->registerScriptFile($baseUrl.'/js/jquery.js');
  // $cs->registerScriptFile($baseUrl.'/js/responsive.js');
  // $cs->registerScriptFile($baseUrl.'/js/jquery.leanModal.min.js');
  // $cs->registerScriptFile($baseUrl.'/js/jquery.dropkick-1.0.0.js');
 
  // $cs->registerCssFile($baseUrl.'/css/style.css');
  // $cs->registerCssFile($baseUrl.'/css/leaflet.css');
  // $cs->registerCssFile($baseUrl.'/css/responsive-style.css');
  // $cs->registerCssFile($baseUrl.'/css/dropkick.css');
?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/responsive.js"></script>
	<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="js/jquery.dropkick-1.0.0.js"></script>


</head>
<body>
<div class="main-wrapper">
<header class="sticky">
	<div class="header-wrapper">
	<div class="logo">
		<a href="#"><img src="images/logo.png" alt="" width="207" height="191"></a>
	</div>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Organizations</a></li>
			<li class="active"><a href="#">News</a></li>
			<li><a href="#">Mero Katha</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	</nav>
	</div>
</header>
<div class="wrapper">
	<div class="top-wrapper">
		<div class="top-content">
		<h1>News</h1>
		<p>All the news related to Violence Against Women </p>
	</div>
	</div>
	<div class="district-wrapper">
		<div class="district-inner-wrapper">
		<div class="map-wrapper">
			<p>Click on a disctrict to view organizations working in the district.</p>
			<div id="map" class="map" style="width:800px; height:500px;">
				
			</div>
			<div class="buttons">
			     <form action="#" method="post" accept-charset="utf-8" class="example_form">
                    <select name="districts" class="default" tabindex="2" id="districtSelector">
                        <option>Select District</option>
                        <?php 
                        foreach ($districts as $district=>$value)
                        { 
							echo("<option value='$district'>$district</option>");
                        }
                    	?>
                    </select>
                  </form>
                   <div class="hide-map">
                    	<a href="#">Hide Map</a>
                    </div>
            </div>
		</div>
		</div>
		
		<div class="news-wrapper">
		<?php
			$increment=0;
			foreach ( $data as  $key=>$value)
			{?>
				<div class="news-block">
				<h3><a href="#news<?php echo($increment); ?>" rel="leanModal">
						<?php echo($value["incident_title"]);?>
					</a></h3>
				<div class="details"><i><?php echo($value["incident_district"]);?> </i>,<?php echo($value["incident_date"]);?> 
						<i><?php echo($value["incident_source_url"]);?></i></div>
				<p>
						<?php echo($value["description"]);?>
			    </p>			
			           <div id="news<?php echo($increment); ?>" class="leanModal">
			            <a class="modal_close" href="javascript:void(0)"></a>
			            <h2>
			            	<?php echo($value["incident_title"]);?>
			            </h2>			              
			           	<div class="left-modal">
			           			<div class="details"><i><?php echo($value["incident_district"]);?> </i>,<?php echo($value["incident_date"]);?> 
						<i><?php echo($value["incident_source_url"]);?></i></div>
							
							<div class="left-top-modal">
			           		<h3>Category</h3>
			           		<p>Domestic Violence, Rape</p>
			           		</div>
			           		<div class="left-bottom-modal">
			           		<h3>Share this news</h3>
			           		<ul>
			           		<li class="facebook"><a href="#">facebook</a></li>
			           		<li class="twitter"><a href="#">twitter</a></li>
			           		<li class="google"><a href="#">google</a></li>
							<li>
								
							</li>
			           		</ul>
			           		</div>
			           	</div>
			           	<div class="right-modal">
			           		<p>
			           		<?php echo($value["description"]);?>
			           		</p>
			           	</div>			 
			           </div>
			</div>
		
		<?php
			$increment += 1;
			}

		?>

			<?php $this->widget('CLinkPager', array(
			    'pages' => $pages,
			)) ?>
		</div>
	</div>	
</div>
</div>
<?php
	 // $cs->registerScriptFile($baseUrl.'/js/script.js');
	 // $cs->registerScriptFile($baseUrl.'/js/districts.js');
  // 	$cs->registerScriptFile($baseUrl.'/js/leaflet.js');
	 // $cs->registerScriptFile($baseUrl.'/js/map_loader.js');

?>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/districts.js"></script>
	<script type="text/javascript" src="js/leaflet.js"></script>

	<script type="text/javascript" src="js/map_loader.js"></script>

</body>
</html>
