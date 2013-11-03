<!DOCTYPE html>
<html lang="en">
  <?php 
  		$cssType = "full-slider.css"; 
  		$htmlTitle = "Parcuri solare fotovoltaice";
	    $htmlDescription = "Parcuri solare fotovoltaice, solutii complete la cheie";
  		require_once 'header.php';
  		
  	    $satuMareThumbsArray = array('img/portofoliu/montare-panouri-fotovoltaice.png',
					  	    		 'img/portofoliu/montare-panouri-parc-fotovoltaic.png',
					  	    		 'img/portofoliu/montare-panouri-parc-solar.jpg',
  	    							 'img/portofoliu/montare-panouri-parc-solar.jpg',
					  	    	);
  	    $brailaThumbsArray = array('img/portofoliu/montare-panouri-fotovoltaice.png',
					  	    	   'img/portofoliu/montare-panouri-parc-fotovoltaic.png',
					  	    	   'img/portofoliu/montare-panouri-parc-solar.jpg',
  	    		                   'img/portofoliu/montare-panouri-parc-solar.jpg',
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
            <div class="fill" style="background-image:url('img/portofoliu/montare-panouri-fotovoltaice.png');"></div>
            <div class="carousel-caption">
              <h1>Oferim panouri pentru parcuri solare fotovoltaice</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/portofoliu/montare-panouri-parc-fotovoltaic.png');"></div>
            <div class="carousel-caption">
              <h1>Oferim panouri pentru parcuri solare fotovoltaice</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/portofoliu/montare-panouri-parc-solar.jpg');"></div>
            <div class="carousel-caption">
              <h1>Oferim panouri pentru parcuri solare fotovoltaice</h1>
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
		        <h1>Instalare separata parcuri solare fotovoltaice</h1>
		         
	        </div>
	        <ul class="icons-ul">
			  <li><i class="icon-li icon-ok"></i>Oferim instalare separata a parcurilor 
			  									 fotovoltaice. Am acumulat experienta de-a lungul timpului in 
			  									 diverse proiecte atat pe teritoriul Romaniei, cat si in afara tarii.
			  </li>
			  </ul>
			  <ul class="icons-ul">
			  <li><i class="icon-li icon-ok"></i>Firma noastra a fost infiintata in anul 2006 si am avut numeroase colaborari atat in domeniul instalarii parcurilor fotovoltaice,
												cat si cel al parapetului metalic rutier. Printre firmele cu care am colaborat se numara si:
												FCC, Aktor, Max Boegl, Alpine, Fracass atat in Romania cat si in Bulgaria, Ungaria si Polonia. Oferim servicii separate de batere stalpi pentru orice
												proiect in Romania sau in afara tarii.</li>
			  </ul>
			  <ul class="icons-ul">
			  <li><i class="icon-li icon-ok"></i>În portofoliul nostru de lucrări există atât proiecte naționale cât și internaționale, 
												  în fiecare situație reușind să executăm lucrări de montaj la cel mai înalt nivel 
												  de calitate. În lungul anilor am reușit să automatizăm și să optimizăm la maximum 
												  atât procesul de montaj cât și resursa umană implică în acest proces. În prezent suntem 
												  capabili să executăm lucrări într-un timp record și la costuri competitive. Atenția permanentă 
												  acordată calității lucrărilor executate a condus la rezultate exceptionale la fiecare lucrare 
												  (până în prezent toate lucrările prestate de compania Unimat au fost recepționate de beneficiari 
												  fără nicio problemă).</li>
			  </ul>
			  <ul class="icons-ul">								  
			  <li><i class="icon-li icon-ok"></i>În prezent oferim toată gama de servicii asociate montajului sistemelor de siguranță rutiere și a sistemelor de tip panouri foto-voltaice. Toate servicile noastre sunt conforme cu normele naționale și europene în vigoare. Suntem capabili să oferim atât consultanță cât și montaj la cel mai înalt standard de calitate, în cel mai scurt timp și la un cost competitiv. </li>
			</ul>
			<h1><a href="#" class="btn btn-primary">Contactati-ne pentru cel mai mic pret de pe piata</a></h1>
        </div>
        
        <?php displayCategory("Proiecte de montaj parcuri fotovoltaice");?>
	     
	    <?php displaySubCategory("Parc instalat panouri solare-fotovoltaice Satu-Mare 1MW", $satuMareThumbsArray);?>
         
        <?php displaySubCategory("Parc instalat panouri solare-fotovoltaice Braila 3MW", $brailaThumbsArray);?>
         
      </div>
      <h1><a href="#" class="btn btn-primary">Contactati-ne pentru cel mai mic pret de pe piata</a></h1>
       <?php require_once('footer.php'); ?>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
