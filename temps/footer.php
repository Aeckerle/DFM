    </div><!-- .container -->
  </div> <!-- #content -->
  <footer id="site-footer">
    
  </footer><!-- #site-footer -->
  
  <!-- JAVASCRIPTS -->
    
  <!-- OMNITURE -->
  <script type="text/javascript">
  function omniture_track(param){
      frames['click_iframe'].location.href = 'omniture.php?ne=' + param;
  };
  </script>
  
  <!-- EVERYTHING ELSE :: including jQuery!!!! -->
  <script src="<?php echo JS_DIR; ?>/script.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- jquery.easing by http://gsgd.co.uk/ : http://gsgd.co.uk/sandbox/jquery/easing/ -->
    <script src="<?php echo JS_DIR; ?>/jquery.easing.min.js"></script>
    <!-- waypoints jQuery plugin by http://imakewebthings.com/ : http://imakewebthings.com/jquery-waypoints/ -->
    <script src="<?php echo JS_DIR; ?>/waypoints.min.js"></script>
    <!-- jquery-smartresize by @louis_remi : https://github.com/louisremi/jquery-smartresize -->
    <script src="<?php echo JS_DIR; ?>/jquery.debouncedresize.js"></script>
    <script src="<?php echo JS_DIR; ?>/cbpFixedScrollLayout.min.js"></script>
    <script>
      $(function() {
        cbpFixedScrollLayout.init();
      });
    </script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 
    $("[rel='tooltip']").tooltip();    
 
    $('#hover-cap .thumbnails').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    );    
 
});        
</script>
<script>
$(document).ready(function(){
   // cache the window object
   $window = $(window);
 
   $('section[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
         
        // background position
        var coords = '50% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script
</script>

<script type='text/javascript' src='js/waypoints.min.js'></script>
<script type='text/javascript' src='js/CounterPlugIn.js'></script>
   
<script src="http://tympanus.net/Blueprints/GridGallery/js/imagesloaded.pkgd.min.js"></script>
    <script src="http://tympanus.net/Blueprints/GridGallery/js/masonry.pkgd.min.js"></script>
    <script src="http://tympanus.net/Blueprints/GridGallery/js/classie.js"></script>
    <script src="js/plugins/cbpGridGallery.js"></script>
    <script>
      new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
    </script>

</body>
</html>