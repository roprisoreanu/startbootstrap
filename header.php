<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $htmlDescription; ?>>
    <meta name="UNIMAT SRL" content="">

    <title><?php echo $htmlTitle; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS for the 'Heroic Features' Template -->
    <link href="css/<?php echo $cssType;?>" rel="stylesheet">
    
    <!-- Custom CSS for Social Buttons -->
    <link href="css/social-buttons.css" rel="stylesheet"> 
    
    <!-- Custom CSS from http://www.lavishbootstrap.com -->
    <link href="css/lavish-bootstrap.css" rel="stylesheet"> 
    <!-- Custom CSS for Unimat -->
    <style>
		.thumbnail {margin:10px;}
		.jumbotron, .thumbnail {
   			 background-image:url('img/plante-verzi-reflectie-apa.jpg');}
		.green-h1 { color:#006A4D; }
		.move { color:#481468; text-shadow: 0 1px 1px rgba(255, 255, 255, 0.46); -webkit-font-smoothing: antialiased;}
		.yellow {color: #F6ECBB; }
		.bright-green {color: #BDD62B;}
		.btn-custom { background-color: hsl(312, 30%, 1%) !important; background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#955087", endColorstr="#030103"); background-image: -khtml-gradient(linear, left top, left bottom, from(#955087), to(#030103)); background-image: -moz-linear-gradient(top, #955087, #030103); background-image: -ms-linear-gradient(top, #955087, #030103); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #955087), color-stop(100%, #030103)); background-image: -webkit-linear-gradient(top, #955087, #030103); background-image: -o-linear-gradient(top, #955087, #030103); background-image: linear-gradient(#955087, #030103); border-color: #030103 #030103 hsl(312, 30%, -10%); color: #fff !important; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.72); -webkit-font-smoothing: antialiased; }
		.btn-custom-green { background-color: hsl(146, 41%, 6%) !important; background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#337a51", endColorstr="#09150e"); background-image: -khtml-gradient(linear, left top, left bottom, from(#337a51), to(#09150e)); background-image: -moz-linear-gradient(top, #337a51, #09150e); background-image: -ms-linear-gradient(top, #337a51, #09150e); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #337a51), color-stop(100%, #09150e)); background-image: -webkit-linear-gradient(top, #337a51, #09150e); background-image: -o-linear-gradient(top, #337a51, #09150e); background-image: linear-gradient(#337a51, #09150e); border-color: #09150e #09150e hsl(146, 41%, -1%); color: #fff !important; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.46); -webkit-font-smoothing: antialiased; }
	    .btn-custom:hover { background-color: hsl(83, 41%, 67%) !important; background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#f3f7ed", endColorstr="#b2cd88"); background-image: -khtml-gradient(linear, left top, left bottom, from(#f3f7ed), to(#b2cd88)); background-image: -moz-linear-gradient(top, #f3f7ed, #b2cd88); background-image: -ms-linear-gradient(top, #f3f7ed, #b2cd88); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f3f7ed), color-stop(100%, #b2cd88)); background-image: -webkit-linear-gradient(top, #f3f7ed, #b2cd88); background-image: -o-linear-gradient(top, #f3f7ed, #b2cd88); background-image: linear-gradient(#f3f7ed, #b2cd88); border-color: #b2cd88 #b2cd88 hsl(83, 41%, 60%); color: hsl(312, 30%, 1%) !important; text-shadow: 0 1px 1px rgba(255, 255, 255, 0.46); -webkit-font-smoothing: antialiased; }
		.btn-custom-green:hover { background-color: hsl(328, 41%, 67%) !important; background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#f7edf2", endColorstr="#cd88ad"); background-image: -khtml-gradient(linear, left top, left bottom, from(#f7edf2), to(#cd88ad)); background-image: -moz-linear-gradient(top, #f7edf2, #cd88ad); background-image: -ms-linear-gradient(top, #f7edf2, #cd88ad); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f7edf2), color-stop(100%, #cd88ad)); background-image: -webkit-linear-gradient(top, #f7edf2, #cd88ad); background-image: -o-linear-gradient(top, #f7edf2, #cd88ad); background-image: linear-gradient(#f7edf2, #cd88ad); border-color: #cd88ad #cd88ad hsl(328, 41%, 60%); color: #333 !important; text-shadow: 0 1px 1px rgba(255, 255, 255, 0.46); -webkit-font-smoothing: antialiased; }
	    .border-top-4px {border-top: 4px solid #006A4D;}
	    .border-top-1px {border-top: 1px solid #006A4D;}
	    .border-round-1px {border: 1px solid grey;}
	    .margin-top {margin-top: 30px;}
	    .rating {
		  unicode-bidi: bidi-override;
		  direction: rtl;
		}
		.rating > span {
		  display: inline-block;
		  position: relative;
		  width: 1.1em;
		}
		.rating > span:hover:before,
		.rating > span:hover ~ span:before {
		   content: "\2605";
		   position: absolute;
		}
		h3 {
		  background: -webkit-linear-gradient(#eee, #333);
		  -webkit-background-clip: text;
		  -webkit-text-fill-color: transparent;
		}
		.navbar.navbar-fixed-top.navbar-inverse.navbar-mauve, .nav.navbar-nav.navbar-mauve li{ background-color: hsl(312, 30%, 1%) !important; background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#955087", endColorstr="#030103"); background-image: -khtml-gradient(linear, left top, left bottom, from(#955087), to(#030103)); background-image: -moz-linear-gradient(top, #955087, #030103); background-image: -ms-linear-gradient(top, #955087, #030103); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #955087), color-stop(100%, #030103)); background-image: -webkit-linear-gradient(top, #955087, #030103); background-image: -o-linear-gradient(top, #955087, #030103); background-image: linear-gradient(#955087, #030103); border-color: #030103 #030103 hsl(312, 30%, -10%); color: white !important; text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.72); -webkit-font-smoothing: antialiased; }
		.navbar-brand.navbar-mauve:hover, .nav.navbar-nav.navbar-mauve li:hover { background-color: hsl(83, 41%, 67%) !important; background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#f3f7ed", endColorstr="#b2cd88"); background-image: -khtml-gradient(linear, left top, left bottom, from(#f3f7ed), to(#b2cd88)); background-image: -moz-linear-gradient(top, #f3f7ed, #b2cd88); background-image: -ms-linear-gradient(top, #f3f7ed, #b2cd88); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f3f7ed), color-stop(100%, #b2cd88)); background-image: -webkit-linear-gradient(top, #f3f7ed, #b2cd88); background-image: -o-linear-gradient(top, #f3f7ed, #b2cd88); background-image: linear-gradient(#f3f7ed, #b2cd88); border-color: #b2cd88 #b2cd88 hsl(83, 41%, 60%); color: hsl(312, 30%, 1%) !important; text-shadow: 0 1px 1px rgba(255, 255, 255, 0.46); -webkit-font-smoothing: antialiased; }
		.float-right { float:right; }
		.icon-border-grey {border: 1px solid #C4BEBE;}
	</style> 
</head>