<!DOCTYPE html>
<html lang="en">
  <?php 
  		$cssType = "full-slider.css"; 
  		$htmlTitle = "Parcuri solare fotovoltaice";
	    $htmlDescription = "Parcuri solare fotovoltaice, solutii complete la cheie";
  		require_once 'header.php';
  		require_once 'thumbsData.php';
  		    
  	    function displayCategory($category) {
  	    	echo "<hr>
	  	    	<div class='clearfix'></div>
	  	    	<!-- " . $category . " -->
	  	    	<div class='col-lg-12'>
	  	    	<i class='icon-th-large icon-2x pull-left icon-border'></i>
	  	    	<h1 class='page-header'>" . $category . "</h1>
	  	    	</div>";
  	    }
  	    
  	    function displaySubCategory($subCategory, $thumbsArray, $countPreviousArray) {
  	    	echo " <!-- " . $subCategory . " -->
	     		   <div class='col-lg-12'>
	               <i class='icon-th-large icon-1x pull-left icon-border'></i>
	               <h2>" . $subCategory ."</h2>
	               <hr>";
  	    	
	         foreach ($thumbsArray as $key => $placeHolder) { 
	         	$key = $key + $countPreviousArray;
		         echo "<div class='col-lg-3 col-md-4 col-xs-6 thumb'>
		         			<div class='thumbnail'>
				         	   <a class='thumbnail thumbnail-details' href='#'><img class='img-responsive' 
				         	   src=" . $placeHolder[0] . "></a>
				         	   <div class='caption'>
					         	   <p>
					         	   <a href='#'>" . substr($placeHolder[0], strrpos( $placeHolder[0], '/' ) + 1) . "</a>
						         	   Pret: " . $placeHolder[1] . " euro
						         	   <a data-toggle='modal' href='#my" . $key . "Modal' class='btn btn-primary btn-custom float-right'>Detalii</a>
					         	   </p>
				         	   </div>
				         	 </div>
		              </div>";
	          } 
	         echo "</div> 
		           <div class='clearfix'></div>";
  	    }
  	    
  	    function displayModal($min, $max) {
  	    		for ($key = $min; $key <= $max; $key++) {
  	    		echo " <!-- Modal -->
  	    		<div class='modal fade' id='my". $key . "Modal' tabindex='-1' role='dialog' aria-labelledby='my". $key . "ModalLabel' aria-hidden='true'>
  	    		<div class='modal-dialog'>
  	    		<div class='modal-content'>
  	    	
  	    		<div class='modal-header'>
  	    		<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
  	    		<h4 class='modal-title'>ET-M572BB</h4>
  	    		</div>
  	    		
  	    		<!-- Tabs -->
  	    		<div class='tabbable'>
	  	    		<ul class='nav nav-tabs'>
		  	    		<li class='active'><a href='#modal-". $key ."body' data-toggle='tab'>Acasa</a></li>
		  	    		<li><a href='#modal-body-". $key ."datasheet' data-toggle='tab'>Datasheet</a></li>
		  	    		<li><a href='#modal-body-". $key ."certificare' data-toggle='tab'>Certificare</a></li>
		  	    		<li><a href='#modal-body-". $key ."garantie' data-toggle='tab'>Garantie</a></li>
		  	    		<li><a href='#modal-body-". $key ."ghid' data-toggle='tab'>Ghid de instalare</a></li>
	  	    		</ul>
	  	    		 
	  	    		<div class='tab-content'>
	  	    		 
		  	    		<div id='modal-". $key ."body' class='tab-pane active modal-body'>
		  	    		<pre class='margin'>";
		  	    		$description = file_get_contents('magazin-panouri/ET-M572BB/descriere');
		  	    		$lines = file('magazin-panouri/ET-M572BB/descriere', FILE_SKIP_EMPTY_LINES);
		  	    		echo "<ul class='icons-ul'>";
		  	    		 
		  	    		foreach ($lines as $line) {
		  	    			echo " <li><i class='icon-li icon-ok'></i>". $line . '</li>';
		  	    		} 
		  	    		
		  	    		echo "</ul></pre>
		  	    		</div>
		  	    	
		  	    		<div id='modal-body-". $key ."datasheet' class='tab-pane'>
		  	    		<iframe src='http://www.etsolar.com/upload/Product/2013101806102721.pdf'
		  	    		style='zoom:0.60' width='99.6%' height='250' frameborder='0'></iframe>
		  	    		</div>
		  	    	
		  	    		<div id='modal-body-". $key ."certificare' class='tab-pane'>
		  	    		<iframe src='http://www.etsolar.com/upload/Product/2011080708413424.jpg'
		  	    		style='zoom:0.60' width='99.6%' height='250' frameborder='0'></iframe>
		  	    		</div>
		  	    	
		  	    		<div id='modal-body-". $key ."garantie' class='tab-pane'>
		  	    		<iframe src='http://www.etsolar.com/upload/Product/2012061112334671.pdf'
		  	    		style='zoom:0.60' width='99.6%' height='250' frameborder='0'></iframe>
		  	    		</div>
		  	    	
		  	    		<div id='modal-body-". $key ."ghid' class='tab-pane'>
		  	    		<iframe src='http://www.etsolar.com/upload/Product/201302210208343.pdf'
		  	    		style='zoom:0.60' width='99.6%' height='250' frameborder='0'></iframe>
		  	    		</div>
	  	    		 
	  	    		</div><!-- /.tab-content -->
  	    		
  	    		</div><!-- /.tabbable -->
  	    	
  	    		<div class='modal-footer'>
  	    		<button type='button' class='btn btn-primary' data-dismiss='modal'>Close</button>
  	    		</div>
  	    	
  	    		</div><!-- /.modal-content -->
  	    		</div><!-- /.modal-dialog -->
  	    		</div><!-- /.modal -->";
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
	     
	    <?php displaySubCategory("Mono series", $monoSeriesThumbsArray, 0);?>
	    <?php $countMonoSeries = count($monoSeriesThumbsArray);
	          displayModal(0, $countMonoSeries);?>
	    
        <?php $min = $countMonoSeries + 1;
              $max = count($countMonoSeries) + count($polySeriesThumbsArray);
              $maxSubCategory = $max + 1;
              displaySubCategory("Poly series", $polySeriesThumbsArray, $maxSubCategory);
              displayModal($min, $max);?>
          
        <?php displayCategory("Module fotovoltaice de tip BIPV");?>
	     
	    <?php $maxSubCategory = $min + count($doubleGlassThumbsArray) + 2;
	          displaySubCategory("Double glass", $doubleGlassThumbsArray, $maxSubCategory);?>
	      
	    <?php $maxSubCategory =  count($transparentThumbsArray) + 5;
	          displaySubCategory("Transparent", $transparentThumbsArray, $maxSubCategory);?>
        
        <?php $maxSubCategory = count($framelessThumbsArray) + 12;
        	  displaySubCategory("Frameless", $framelessThumbsArray, $maxSubCategory);?>
        
        <?php displayCategory("Invertoare");?>
       
        <?php $maxSubCategory = count($inverterThumbsArray) + 16;
        	  displaySubCategory("Invertoare de tip ET", $inverterThumbsArray, $maxSubCategory);?>
        
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
