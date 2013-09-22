<!DOCTYPE html>
<html lang="en">
  <?php 
  		$cssType = "full-slider.css"; 
  		$htmlTitle = "Parcuri solare fotovoltaice";
	    $htmlDescription = "Parcuri solare fotovoltaice, solutii complete la cheie";
  		require_once 'header.php';
  ?>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
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
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
            <div class="carousel-caption">
              <h1>Oferim panouri pentru parcuri solare fotovoltaice</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
              <h1>Caption 2</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
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
		        <h1>Panouri pentru parcuri solare fotovoltaice</h1>
	        </div>
	        <ul class="icons-ul">
			  <li><i class="icon-li icon-ok"></i>Oferim panouri solare de tip MONO si POLY</li>
			  <li><i class="icon-li icon-ok"></i>Cu cristale mono cristaline si poli cristaline</li>
			  <li><i class="icon-li icon-ok"></i>De marimea 5" sau 6"</li>
			  <li><i class="icon-li icon-ok"></i>Modulele contin 60 sau 72 de celule</li>
			  <li><i class="icon-li icon-ok"></i>sunt certificate TUV si UL</li>
			  <li><i class="icon-li icon-ok"></i>Procesul de fabricatie este supus unui control de calitate strict.</li>
			</ul>
			<h1><a href="#" class="btn btn-primary">Contactati-ne pentru oferta de pret</a></h1>
        </div>
        
         <div class="col-lg-12">
            <h1 class="page-header">ET Module Galerie panouri fotovoltaice</h1>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#"><img class="img-responsive" src="http://placehold.it/400x300"></a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#"><img class="img-responsive" src="http://placehold.it/400x300"></a>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#"><img class="img-responsive" src="http://placehold.it/400x300"></a>
         </div>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#"><img class="img-responsive" src="http://placehold.it/400x300"></a>
         </div>
        
      </div>
      <h1><a href="#" class="btn btn-primary">Contactati-ne pentru oferta de pret</a></h1>
       <?php require_once('footer.php'); ?>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
