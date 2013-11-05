<!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
  <div class="flexer">
  <div class="row">
    <div class="twelve columns">
      <div id="slider">
        <img src="<?php echo $image_path?>/images/our_projects.jpg" />
        <img src="<?php echo $image_path?>/images/our_domains.jpg" />
        <img src="<?php echo $image_path?>/images/our_capabalities.jpg" />
        <img src="<?php echo $image_path?>/images/our_technologies.jpg" />
        <img src="<?php echo $image_path?>/images/our_clients.jpg" />
      </div>
      
    </div>
  </div>
  </div>
  
  <!-- Three-up Content Blocks -->
  
  <!-- <div class="row info_box">
  	<div class="four columns">
  		<?php
    		//print render($page['home_info_domian']);
		?>
	</div>	
	<div class="four columns">
  		<?php
    		//print render($page['home_info_project']);
		?>
	</div>
	<div class="four columns">
  		<?php
    		//print render($page['home_info_testimonials']);
		?>
	</div>
  </div>
-->
  <div class="row spacing">
   <div class="eight columns" style="padding-right:0px !important;">

      <?php
    		//print render($page['home_info_what_we_do']);
      print render($page['home_blocks']);
      
		?>
   </div>
   <div class="four columns">
   		<?php
    		print render($page['home_info_testimonials']);
		?>
   </div>

   <div class="four columns">
   		<div class="social_icons">
        <h2>Social Networks</h2>
          <ul class="link-list">
            <li><a class="socialcon-facebook" href="#"><span></span></a></li>
            <li><a class="socialcon-twitter" href="#"><span></span></a></li>
            <li><a class="socialcon-youtube" href="#"><span></span></a></li>
            <li><a class="socialcon-linkedin" href="#"><span></span></a></li>
          </ul>
        </div>
   </div>
   
  </div>
  
  <div class="row spacing">
    <div class="twelve columns">
	<?php
    		//print render($page['home_clients']);
		?>
   

    </div>
    </div>
    <script type="text/javascript">
     jQuery(window).load(function() {
    	 jQuery('#slider').orbit();
    	 //jQuery('.clients ul').orbit();
     });
	</script>