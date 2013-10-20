<!DOCTYPE html>
<html lang="en">
  <?php 
  		$cssType = "full-slider.css"; 
  		$htmlTitle = "Parcuri solare fotovoltaice";
	    $htmlDescription = "Parcuri solare fotovoltaice, solutii complete la cheie";
  		require_once 'header.php';
  		
  	    $monoSeriesThumbsArray = array('img/magazin-online/monocristaline/ET-M572BB-180W-205W',
					  	    		   'img/magazin-online/monocristaline/ET-M660BB-235W-255W',
					  	    		   'img/magazin-online/monocristaline/ET-M672BB-280W-305W',
					  	    		   'img/magazin-online/monocristaline/ET-M572WW-185W-210W',
						  	    	   'img/magazin-online/monocristaline/ET-M660WW-235W-260W',
						  	    	   'img/magazin-online/monocristaline/ET-M672WW-280W-310W',
					  	    	);
  	    $polySeriesThumbsArray = array('img/magazin-online/policristaline/ET-P660BB-225W-255W',
					  	    		   'img/magazin-online/policristaline/ET-P660BB-225W-255W',
					  	    		   'img/magazin-online/policristaline/ET-P672WB-WW-270W-300W',
					  	    		   'img/magazin-online/policristaline/ET-P672BB-270W-300W',
					  	    	);
  	    
  	    $doubleGlassThumbsArray  = array('img/magazin-online/double-glass/modul-double-glass',
					  	    	);
  	    
  	    $transparentThumbsArray  = array('img/magazin-online/transparente/M572TL-180W-200W',
						  	    		'img/magazin-online/transparente/M572TW-180W-200W',
						  	    		'img/magazin-online/transparente/M660TW-235W-255W',
						  	    		'img/magazin-online/transparente/M672TW-280W-305W',
						  	    		'img/magazin-online/transparente/P660TW-225W-250W',
						  	    		'img/magazin-online/transparente/P672TW-270W-300W',
  	    );
  	    
  	    $framelessThumbsArray  = array('img/magazin-online/frameless/ET-M572BL-180W-200W',
					  	    		   'img/magazin-online/frameless/ET-M572WL-185W-205W',
					  	    		   'img/magazin-online/frameless/ET-P660WL-225W-250W',
					  	    		   'img/magazin-online/frameless/ET-P672WL-270W-300W',
					  	    	);
  	    $inverterThumbsArray  = array('img/magazin-online/invertoare/13kw17kw20kw',
					  	    		   'img/magazin-online/invertoare/1kw15kw2kw',
					  	    		   'img/magazin-online/invertoare/3k5kw',
					  	    		   'img/magazin-online/invertoare/3kw4kw5kw',
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
  	    $counter = 0;
  	    function displaySubCategory($subCategory, $thumbsArray) {
  	    	echo " <!-- " . $subCategory . " -->
	     		   <div class='col-lg-12'>
	               <i class='icon-th-large icon-1x pull-left icon-border'></i>
	               <h2>" . $subCategory ."</h2>
	               <hr>";
	         foreach ($thumbsArray as $placeHolder) { 
		         echo "<div class='col-lg-3 col-md-4 col-xs-6 thumb'>
		         			<div class='thumbnail'>
				         	   <a class='thumbnail thumbnail-details' href='#'><img class='img-responsive' 
				         	   src=" . $placeHolder . "></a>
				         	   <div class='caption'>
					         	   <p>
					         	   <a href='#'>ET-P672BB 290W-300W</a>
						         	   Pret: 400 euro
						         	   <a href='#' class='btn btn-primary btn-custom float-right'>Detalii</a>
					         	   </p>
				         	   </div>
				         	 </div>
		              </div>";
	          } 
	         echo "</div> 
		           <div class='clearfix'></div>";
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
            <div class="fill" style="background-image:url('img/magazin-online/fotovoltaice-monocristaline-180W-1900x1080.gif')"></div>
            <div class="carousel-caption">
              <h1><span class='green-h1'>Panouri fotovoltaice monocristaline</span></h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/magazin-online/fotovoltaice-policristaline-660W-1900x1080.gif');"></div>
            <div class="carousel-caption">
              <h1><span class='green-h1'>Panouri fotovoltaice policristaline</span></h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/magazin-online/invertoare-1900x1080.gif');"></div>
            <div class="carousel-caption">
              <h1>Invertoare</h1>
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
		        <h1>Panouri pentru parcuri solare fotovoltaice</h1>
		         
	        </div>
	        <ul class="icons-ul">
			  <li><i class="icon-li icon-ok"></i>Oferim panouri solare de tip MONO si POLY</li>
			  <li><i class="icon-li icon-ok"></i>Cu cristale mono cristaline si poli cristaline</li>
			  <li><i class="icon-li icon-ok"></i>De marimea 5" sau 6"</li>
			  <li><i class="icon-li icon-ok"></i>Modulele contin 60 sau 72 de celule</li>
			  <li><i class="icon-li icon-ok"></i>Sunt certificate TUV si UL</li>
			  <li><i class="icon-li icon-ok"></i>Procesul de fabricatie este supus unui control de calitate strict</li>
			</ul>
			<h1><?php echo $contactButton; ?></h1>
        </div>
        
        <?php displayCategory("Module fotovoltaice de tip ET");?>
	     
	    <?php displaySubCategory("Mono series", $monoSeriesThumbsArray);?>
	    
        <?php displaySubCategory("Poly series", $polySeriesThumbsArray);?>
          
        <?php displayCategory("Module fotovoltaice de tip BIPV");?>
	     
	    <?php displaySubCategory("Double glass", $doubleGlassThumbsArray);?>
	      
	    <?php displaySubCategory("Transparent", $transparentThumbsArray);?>
        
        <?php displaySubCategory("Frameless", $framelessThumbsArray);?>
        
        <?php displayCategory("Invertoare");?>
       
        <?php displaySubCategory("Invertoare de tip ET", $inverterThumbsArray);?>
        
        <hr>
        <div class="col-lg-12">
	        <ul class="icons-ul">
			  <li><i class="icon-li icon-ok"></i>Oferim o gama completa de produse 
			  inclusiv invertoare dolare, accesorii si service. Invertoarele de tip Omnik se potrivesc cu toate modulele
			  solare de tip rezidential si comercial.</li>
			</ul>
        </div>
      </div>
      <h1><?php echo $contactButton; ?></h1>
       <?php require_once('footer.php'); ?>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
