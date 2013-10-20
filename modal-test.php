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
  	    
  	    $product = array (
  	    		'title'        => 'ET-M572BB',
  	    		'description'  => 'magazin-panouri/ET-M572BB/descriere',
  	    		'datasheet'    => 'http://www.etsolar.com/upload/Product/2013101806102721.pdf',
  	    		'certificate'  => 'http://www.etsolar.com/upload/Product/2011080708413424.jpg',
  	    		'warranty'     => 'http://www.etsolar.com/upload/Product/2012061112334671.pdf',
  	    		'installation' => 'http://www.etsolar.com/upload/Product/201302210208343.pdf',
  	    		);
  	    
  	    foreach (new DirectoryIterator('magazin-panouri') as $fileInfo) {
  	    	if($fileInfo->isDot()) continue;
  	    	$products['title'][] = $fileInfo->getFilename();
  	    	$products['description'][] = 'magazin-panouri/' . $fileInfo->getFilename() . '/descriere';
  	    	$products['datasheet'][] = file_get_contents('magazin-panouri/' . $fileInfo->getFilename() . '/datasheet');
  	    	$products['certificate'][] = file_get_contents('magazin-panouri/' . $fileInfo->getFilename() . '/certificat');
  	    	$products['warranty'][] = file_get_contents('magazin-panouri/' . $fileInfo->getFilename() . '/datasheet');
  	    	$products['installation'][] = file_get_contents('magazin-panouri/' . $fileInfo->getFilename() . '/ghid-instalare');
  	    }
  	    var_dump( $products['datasheet'][3]);
  ?>
 
  <body>

<!-- Button trigger modal -->
<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo $products['title']['3'];?></h4>
      </div>
       <div class="modal-body">
	       <!-- tabbed content -->
			<div class="tabbable">
			  <ul class="nav nav-tabs nav-pills">
			    <li class="active"><a href="#pane1" data-toggle="tab">Descriere</a></li>
			    <li><a href="#pane2" data-toggle="tab">Datasheet</a></li>
			    <li><a href="#pane3" data-toggle="tab">Certificat</a></li>
			    <li><a href="#pane4" data-toggle="tab">Garantie</a></li>
			    <li><a href="#pane5" data-toggle="tab">Instalare</a></li>
			  </ul>
			  <div class="tab-content">
			    
			    <div id="pane1" class="tab-pane active">
			      <h4></h4>
			      <pre><?php include_once $products['description']['3'];?></pre>
			    </div>
			    
			    <div id="pane2" class="tab-pane">
				    <h4>Datasheet</h4>
				    <iframe src="<?php echo $products['datasheet']['3'];?>" 
					style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
			    </div>
			    
			    <div id="pane3" class="tab-pane">
			      <h4>Certificare</h4>
			      <iframe src="<?php echo $products['certificate']['3'];?>"
				  style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
			    </div>
			    
			    <div id="pane4" class="tab-pane">
			      <h4>Garantie</h4>
			      <iframe src="<?php echo $products['warranty']['3'];?>"
				  style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
			    </div>
			    
			    <div id="pane5" class="tab-pane">
			      <h4>Instalare</h4>
			      <iframe src="<?php echo $products['installation']['3'];?>"
				    style="zoom:0.60" width="99.6%" height="250" frameborder="0"></iframe>
			    </div>
			    
			  </div><!-- /.tab-content -->
			</div><!-- /.tabbable -->
			<!-- tabbed content -->		       		
	   </div>
	   <div class="modal-footer">
	       <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	   </div>
	 </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  

   



    <!-- Bootstrap core JavaScript -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
