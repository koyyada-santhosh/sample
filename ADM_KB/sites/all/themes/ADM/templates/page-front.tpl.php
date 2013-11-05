<div class="product_curosal">

  <!-- The container is used to define the width of the slideshow -->
  <div class="slide_container">
    <div id="slides">
      <img src="<?php echo $image_path?>images/domain1.jpg" alt="Domain1">
      <img src="<?php echo $image_path?>images/technologies.jpg" alt="Technologies">
      <img src="<?php echo $image_path?>images/Capabilities.jpg" alt="Capabilities">
      <img src="<?php echo $image_path?>images/projects.jpg" alt="Projects">
    </div>
    <div class="slide_links"><a href="#">Domain</a> <a href="#">Technologies</a> <a href="#">Capabilities</a> <a href="#">Projects</a></div>
  </div>
  <!-- End SlidesJS Required: Start Slides -->

  <script>
    jQuery(function() {
      jQuery('#slides').slidesjs({
        width: 940,
        height: 370,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true,
		  pauseOnHover: false
        },
		
	 effect: {
		  slide: {
			// Slide effect settings.
			speed: 1000
			  // [number] Speed in milliseconds of the slide animation.
		  },
	
	fade: {
			speed: 500,
			  // [number] Speed in milliseconds of the fade animation.
			crossfade: true
			  // [boolean] Cross-fade the transition.
		  }
		}

      });
    });
  </script>
</div>
    
    <div class="product_info">
     <h2>Projects</h2>
     <ul>
      <li>
		<div class="disc">
          <h3>Fox Sports</h3>
          <img src="<?php echo $image_path?>images/foxsports_1.jpg" />
          <p>Fox Sports is the brand name</p>
        </div>
        <div class="clearfloat"></div>
      </li>
      <li>
		<div class="disc">
          <h3>Fox Sports</h3>
          <img src="<?php echo $image_path?>images/foxsports_1.jpg" />
          <p>Fox Sports is the brand name</p>
        </div>
        <div class="clearfloat"></div>
      </li>
     </ul>
     <div class="view_projects"><a href="#">View all Projects</a></div>
    </div>
    
    
	<div class="product_info" style="margin-left:20px;">
     <h2>Customers</h2>
     <ul class="cust">
      <li>
		<div class="disc">
          <h3>Fox Sports</h3>
          <p>Fox Sports is the brand name</p>
        </div>
        <div class="clearfloat"></div>
      </li>
      <li>
	  <div class="disc">
          <h3>Fox Sports</h3>
          <p>Fox Sports is the brand name</p>
        </div>
        <div class="clearfloat"></div>
      </li>
	 <li>
	  <div class="disc">
          <h3>Fox Sports</h3>
          <p>Fox Sports is the brand name</p>
        </div>
        <div class="clearfloat"></div>
      </li>
      
     </ul>
     <div class="view_projects"><a href="#">View all Projects</a></div>
    </div> 