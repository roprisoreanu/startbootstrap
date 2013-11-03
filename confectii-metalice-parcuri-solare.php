<!DOCTYPE html>
<html lang="en">
  <?php 
  		$cssType = "full-slider.css"; 
  		$htmlTitle = "Parcuri solare fotovoltaice";
	    $htmlDescription = "Parcuri solare fotovoltaice, solutii complete la cheie";
  		require_once 'header.php';
  		
  	    $monoSeriesThumbsArray = array('http://placehold.it',
					  	    		   'http://placehold.it',
					  	    		   'http://placehold.it',
					  	    		   'http://placehold.it',
					  	    	);
  	    $polySeriesThumbsArray = array('http://placehold.it',
					  	    		   'http://placehold.it',
					  	    		   'http://placehold.it',
					  	    		   'http://placehold.it',
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
		         	   src=" . $placeHolder . "/400x300'></a>
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
            <div class="fill" style="background-image:url('img/structuri-metalice/structuri-metalice.jpg');"></div>
            <div class="carousel-caption">
              <h1>Oferim panouri pentru parcuri solare fotovoltaice</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/structuri-metalice/structura-melica-zoom.jpg');"></div>
            <div class="carousel-caption">
              <h1>Caption 2</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('img/structuri-metalice/High-tension-powerline-cables-supporting-tower-structure-2321400.jpg');"></div>
            <div class="carousel-caption">
              <h1>Caption 3</h1>
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
		        <h1>Oferim confectii metalice pentru parcuri solare fotovoltaice</h1>
	        </div>
	        
	        <!-- Button trigger modal -->
			  <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>
			
			  <!-- Modal -->
			  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			      
			      <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">ET-M572BB</h4>
			      </div>
			         <!-- Tabs -->
			         <div class="tabbable">
					 	<ul class="nav nav-tabs">
						  <li class="active"><a href="#modal-body" data-toggle="tab">Acasa</a></li>
						  <li><a href="#modal-body-datasheet" data-toggle="tab">Datasheet</a></li>
						  <li><a href="#modal-body-certificare" data-toggle="tab">Certificare</a></li>
						  <li><a href="#modal-body-garantie" data-toggle="tab">Garantie</a></li>
						  <li><a href="#modal-body-ghid" data-toggle="tab">Ghid de instalare</a></li>
					 	</ul>
					  <div class="tab-content">
					    <div id="modal-body" class="tab-pane active">
					    <pre class="margin">
					      <?php $description = file_get_contents('magazin-panouri/ET-M572BB/descriere'); 
					            $lines = file('magazin-panouri/ET-M572BB/descriere', FILE_SKIP_EMPTY_LINES);
					            echo '<ul class="icons-ul">';
					            foreach ($lines as $line) {
					            	echo ' <li><i class="icon-li icon-ok"></i>'. $line . '</li>';
					            }
					            echo '</ul>'; ?>
					   </pre>
					    </div>
					    <div id="modal-body-datasheet" class="tab-pane">
					      <iframe src="http://www.etsolar.com/upload/Product/2013101806102721.pdf" 
				          style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
					    </div>
					    <div id="modal-body-certificare" class="tab-pane">
					      <iframe src="http://www.etsolar.com/upload/Product/2011080708413424.jpg" 
					      style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
					    </div>
					    <div id="modal-body-garantie" class="tab-pane">
					      <iframe src="http://www.etsolar.com/upload/Product/2012061112334671.pdf" 
					      style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
					    </div>
					    <div id="modal-body-ghid" class="tab-pane">
					      <iframe src="http://www.etsolar.com/upload/Product/201302210208343.pdf" 
					      style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
					    </div>
					 
					  </div><!-- /.tab-content -->
					</div><!-- /.tabbable -->
			        
			        <div class="modal-footer">
			          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			        </div>
			        
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
	        
	        <ul class="icons-ul">
			  <li>
			  	<i class="icon-li icon-ok"></i>Oferim solutia completa de confectii metalice pentru parcurile foto-voltaice.
			  </li>
			</ul>
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
