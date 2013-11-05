<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?><?php print $scripts; ?>
  <script>
  jQuery(document).ready(function(){
    jQuery("#main-menu-links li:last").css("border", "none");
	jQuery('header nav').meanmenu();
   });
  </script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://10.11.12.133/ADM_KB/sites/all/themes/ADM/js/jquery.slides.min.js"></script>
  <script src="http://10.11.12.133/ADM_KB/sites/all/themes/ADM/js/jquery.meanmenu.js"></script>
  <!--[if lt IE 7]> 
    <style>
  		.IE {display:none;}
    </style>

   <![endif]-->
  <!--[if IE 7]>    
    <style>
  		.IE {display:none;}
    </style>
  <![endif]-->
  <!--[if IE 8]>
    <style>
  		.IE {display:none;}
    </style>
  <![endif]-->

  <!-- SlidesJS Required (if responsive): Sets the page width to the device width. -->
  <meta name="viewport" content="width=device-width">
  </head>
  <body>
<div class="container">
<div class="header"><a href="#" class="adm_logo"><img src="<?php echo $image_path?>images/prolifics_logo.jpg" alt="Prolifics" name="Prolifics" id="Prolifics" style="background: #8090AB; display:block;" /></a> <a href="#" class="small_prolifics"><img src="<?php echo $image_path?>images/header_prolofics_logo.png" alt="Prolifics" /></a>
    <!-- end .header -->
    <header class="device">
    <nav>
        <ul class="IE">
        <li><a href="#">Top Level Link</a>
            <ul>
            <li><a href="#">Second Level Link</a>
                <ul>
                <li><a href="#">Third Level Link</a></li>
                <li><a href="#">Third Level Link</a></li>
                <li><a href="#">Third Level Link</a>
                    <ul>
                    <li><a href="#">Fourth Level Link</a></li>
                    <li><a href="#">Fourth Level Link</a></li>
                    <li><a href="#">Fourth Level Link</a>
                        <ul>
                        <li><a href="#">Fifth Level Link</a></li>
                        <li><a href="#">Fifth Level Link</a></li>
                        <li><a href="#">Fifth Level Link</a></li>
                      </ul>
                      </li>
                  </ul>
                  </li>
              </ul>
              </li>
            <li><a href="#">Second Level Link</a></li>
            <li><a href="#">Second Level Link</a></li>
          </ul>
          </li>
        <li><a href="#">Top Level Link</a></li>
        <li><a href="#">Top Level Link</a></li>
        <li><a href="#">Top Level Link</a></li>
      </ul>
      </nav>
  </header>
    <?php print render($page); ?>
    <div class="footer">
    <div class="fotter_logo"> <?php /*?><img src="<?php echo $image_path?>images/fotter_logo.jpg" /><?php */?>
        <div class="clearfloat"></div>
        <p><a href="#" class="blog"></a> <a href="#" class="facebook"></a> <a href="#" class="twitter"></a> <a href="#" class="youtube"></a> | 1.800.458.3313</p>
      </div>
    <!-- end .footer --></div>
    <!-- end .container --></div>
</body>
</html>
