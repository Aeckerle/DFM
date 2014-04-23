<!DOCTYPE HTML> 
<!--[if IE 8]>  <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <title><?php echo THE_TITLE; if(isset($page_title)) { echo " :: " . $page_title; } ?></title>
  <?php include('temps/meta/boilerplate.php'); ?>
  <?php include('temps/meta/app.php'); ?>
  <?php include('temps/meta/facebook.php'); ?>
  <?php include('temps/meta/twitter.php'); ?>

  <!-- MODERNIZER -->
<script src="http://prinzhorn.github.io/skrollr/dist/skrollr.min.js"></script>

   

	<!--[if lt IE 9]>
	  <script src="<?php echo JS_DIR; ?>/ie/selectivizr.js"></script>
	  <script src="<?php echo JS_DIR; ?>/ie/respond.js"></script>
	<![endif]-->  

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/style.css" media="screen"/>


  
<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">



<script src="http://tympanus.net/Development/3DGridEffect/js/modernizr.custom.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
   <script>
      function initialize() {
   var mapOptions = {
            zoom: 14,                        
  zoomControl: false,
  scaleControl: false,
  scrollwheel: false,
  disableDoubleClickZoom: true,
           center: new google.maps.LatLng(39.741056, -104.988107),  
           mapTypeId: google.maps.MapTypeId.TERRAIN
       };
 
   var map = new google.maps.Map(document.getElementById('location-canvas'),
                                   mapOptions);
                              
   var marker = new google.maps.Marker({
                   map: map,
                   draggable: false,
                   position: new google.maps.LatLng(39.741056, -104.988107)
       });
}
                        
google.maps.event.addDomListener(window, 'resize', initialize);
google.maps.event.addDomListener(window, 'load', initialize);
    </script> 


  <!-- 
    when you are ready:
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/style.min.css" media="screen"/> 
  -->

</head>
 

  <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="#fbsection1">Digital First Media</a>
          </div>
          <div class="collapse navbar-collapse">
           <nav>
                   <ul class="nav navbar-nav navbar-right">
                    <li><a href="#fbsection1">Home</a></li>
                  <li><a href="#fbsection2">About Us</a></li>
                  <li><a href="#fbsection3">Portfolio</a></li>
                 <li><a href="#fbsection4">Sevices</a></li>
                <li> <a href="#fbsection5">Contact Us</a></li>
             </ul>
        </nav>
          </div><!--/.nav-collapse -->
        </div>
      </div>