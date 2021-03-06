<!DOCTYPE html>
<html lang="en">
  <?php 
  		$cssType = "full-slider.css"; 
  		$htmlTitle = "Echipament";
	    $htmlDescription = "Echipament parcuri fotovoltaice";
  		require_once 'header.php';
  		
  	    $equipmentThumbsArray = array('img/echipament/batipal-pauselli.jpg',
			  	    		    'img/echipament/batipal-pauselli-spate.jpg',
			  	    		    'img/echipament/batipal-turchi.jpg',
				  	    	    'img/echipament/camion-cu-datele-unimat.jpg',
				  	    	    'img/echipament/camion-macara.jpg',
				  	    	    'img/echipament/camion-macara-lateral.jpg',
				  	    		'img/echipament/camion-mercedes-fata.jpg',
				  	    		'img/echipament/camion-mercedes.jpg',
				  	    		'img/echipament/camion-mercedes-lateral.jpg',
				  	    		'img/echipament/camion-merces-aproape.jpg',
				  	    		'img/echipament/camion-unimat-mercedes.jpg',
				  	    		'img/echipament/compresor.jpg',
				  	    		'img/echipament/compresor-spate.jpg',
				  	    		'img/echipament/motostivuitor-lateral.jpg',
				  	    		'img/echipament/peugeot.jpg',
				  	    		'img/echipament/peugeot-lateral.jpg',
					  	  );
  	    $polySeriesThumbsArray = array('http://placehold.it',
					  	    		   'http://placehold.it',
					  	    		   'http://placehold.it',
					  	    		   'http://placehold.it',
					  	    	);
  	    
  	    $equipmentArray = array('Camioane tip Mercedes 1824 (greutate utila 15 t)',
				  	    		'Camioane si remorci tip Mercedes Aktros (greutate utila 26 t)',
				  	    		'Utilaje de bătut stâlpi- Pauselli',
				  	    		'Utilaje de bătut stâlpi- Turchi',
				  	    		'Autoutilitare tip Doka Mercedes Sprinter',
				  	    		'Autoutilitare tip Mercedes Sprinter 416',
				  	    		'Compresoare aer 4m3',
				  	    		'Compresoare aer 5m3',
				  	    		'Compresoare aer 2,5m3',
				  	    		'Stivuitor 3,5 tone Hyster',
				  	    		'Stivuitor 2,5 tone Moffett - 2 bucati',
				  	    		'Platforme de transport utilaje de bătut stâlpi',
				  	    		'Masini rotopercutante pneumatice',
				  	    		'Generatoare',
				  	    		'Invertoare si diferite scule specifice',
				  	    );
  	    
  	    function displayCategory($category) {
  	    	echo "<hr>
	  	    	<div class='clearfix'></div>
	  	    	<!-- " . $category . " -->
	  	    	<div class='col-lg-12'>
	  	    	<i class='icon-th-large icon-2x pull-left icon-border'></i>
	  	    	<h1 class='page-header'>" . $category . "</h1>
	  	    	</div>";
  	    }
  	    
  	    function displaySubCategory($subCategory, $thumbsArray) {
  	    	echo " <!-- " . $subCategory . " -->
	     		   <div class='col-lg-12'>
	               <i class='icon-th-large icon-1x pull-left icon-border'></i>
	               <h2>" . $subCategory . "</h2>
	               <hr>";
	         foreach ($thumbsArray as $placeHolder) { 
		         echo "<div class='col-lg-3 col-md-4 col-xs-6 thumb'>
		         	   <a class='thumbnail' href='#'><img class='img-responsive' 
		         	   src=" . $placeHolder . "></a>
		         	   </div>";
	          } 
	         echo "</div>
	         	   <hr>
		           <div class='clearfix'></div>";
  	    }
  	    
  	    function displayEquipment($equipmentArray) {
  	    	foreach ($equipmentArray as $item) {
  	    		echo 
  	    		"<ul class='icons-ul'>
	  	    		<li>
		  	    		<i class='icon-li icon-ok'></i>"
		  	    		. $item . 
	  	    		"</li>
  	    		</ul>";
  	    	}
  	    }
  ?>
 
  <body>
     <?php require_once 'navigation.php';?>
    
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('img/proiect-tehnic-executie/green leaves reflecting in the water, shallow focus _10231969.jpg');"></div>
            <div class="carousel-caption">
              <h1>Echipament</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/echipament/camion-mercedes-lateral.jpg');"></div>
            <div class="carousel-caption">
              <h1>Echipament</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/echipament/camion-macara.jpg');"></div>
            <div class="carousel-caption">
              <h1>Echipament</h1>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
    </div>

    <div class="container">
      <div class="row section">
        <div class="col-lg-12">
			<div class="well well-large well-transparent clearfix">
		        <i class="icon-th-large icon-3x pull-left icon-border"></i>
		        <h1>Echipament</h1>
		         
	        </div>
	      <?php displayEquipment($equipmentArray);?>
	      <?php displaySubCategory('Echipamente Unimat', $equipmentThumbsArray) ?>
		
			<h1><a href="#" class="btn btn-primary">Contactati-ne pentru cel mai mic pret de pe piata</a></h1>
        </div>
       
      </div>
      
       <?php require_once('footer.php'); ?>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
