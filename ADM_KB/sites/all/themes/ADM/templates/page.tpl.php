  <?php if ($main_menu): ?>
      <ul id="menu" class="menu">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </ul> <!-- /#main-menu -->
    <?php endif; ?>
  <!-- <ul id="menu" class="menu"><li><a href="#">Home</a></li> <li><a href="#">Wiki</a></li> <li><a href="#">Forums</a></li> <li><a href="#">Pre-Sales</a></li> <li><a href="#">Login</a></li></ul> -->  
  </div>
  <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
   <div class="sidebar1">
   <?php 
   if ($page['sidebar_first']): 
  		print render($page['sidebar_first']);
    endif;
    ?>
   </div>
  <div class="content_wrapper">
  <?php if ($breadcrumb): 
  			if(isset($node)){
		  		if($node->type){
		  			$breadcrumb.= " >> ". ucfirst($node->type);
		  		}
  			}
		//  $breadcrumb.= " >> <span>".$title."</span>";
  
  ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
  <?php 

  if ($is_front){
	  include('page-front.tpl.php');
  }else{
	  
  	
  	print render($page['content']);
  }
 
     ?>
     </div>
  
<script>
(function(a){a.fn.vTicker=function(b){var c={speed:700,pause:4000,showItems:3,animation:"",mousePause:true,isPaused:false,direction:"up",height:0};var b=a.extend(c,b);moveUp=function(g,d,e){if(e.isPaused){return}var f=g.children("ul");var h=f.children("li:first").clone(true);if(e.height>0){d=f.children("li:first").height()}f.animate({top:"-="+d+"px"},e.speed,function(){a(this).children("li:first").remove();a(this).css("top","0px")});if(e.animation=="fade"){f.children("li:first").fadeOut(e.speed);if(e.height==0){f.children("li:eq("+e.showItems+")").hide().fadeIn(e.speed)}}h.appendTo(f)};moveDown=function(g,d,e){if(e.isPaused){return}var f=g.children("ul");var h=f.children("li:last").clone(true);if(e.height>0){d=f.children("li:first").height()}f.css("top","-"+d+"px").prepend(h);f.animate({top:0},e.speed,function(){a(this).children("li:last").remove()});if(e.animation=="fade"){if(e.height==0){f.children("li:eq("+e.showItems+")").fadeOut(e.speed)}f.children("li:first").hide().fadeIn(e.speed)}};return this.each(function(){var f=a(this);var e=0;f.css({overflow:"hidden",position:"relative"}).children("ul").css({position:"absolute",margin:0,padding:0}).children("li").css({margin:0,padding:0});if(b.height==0){f.children("ul").children("li").each(function(){if(a(this).height()>e){e=a(this).height()}});f.children("ul").children("li").each(function(){a(this).height(e)});f.height(e*b.showItems)}else{f.height(b.height)}var d=setInterval(function(){if(b.direction=="up"){moveUp(f,e,b)}else{moveDown(f,e,b)}},b.pause);if(b.mousePause){f.bind("mouseenter",function(){b.isPaused=true}).bind("mouseleave",function(){b.isPaused=false})}})}})(jQuery);

jQuery(function(){
	jQuery('.view-customers-left .view-content .item-list').vTicker({ 
		speed: 1000,
		pause: 3000,
		animation: 'fade',
		mousePause: false,
		showItems: 3
	});
});
</script>