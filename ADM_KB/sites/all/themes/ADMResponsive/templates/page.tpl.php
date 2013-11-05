   <!-- Header and Nav 
 <div class="top_wrapper">
	<div class="row">
       
  </div>
  <div class="clearit"></div></div> -->
<div class="row">
    <div class="three columns">
      <h1 class="ADM_logo"><a href="<?php echo $siteurl?>"><img src="<?php echo $image_path?>/images/ADM_logo.png" alt="ADM Knowledge Base" title="ADM Knowledge Base"  /> </a></h1>
    </div>
     
    <div class="nine column">
      <div class="right login">
         	<?php
    		//print render($page['header']);
    		global $user;
    		if ($user->uid != 0) {
    			echo "<a href='".$siteurl."/?q=dashboard'><span class='awesome-dashboard'></span>My Dashboard</a>";
    			echo "<a href='".$siteurl."/?q=user/logout'><span class='awesome-unlock-alt'></span>Logout</a>";
    		}else{
    			echo "<a href='#' class='login'><span class='foundicon-people'></span> LOGIN</a>";
    				
    			?>
    				<div id="login-content" style="display:none;">
						<?php print render($page['header']);?>
					</div>
    			<?php 
    		}
			?>
         
         
         </div>
         <div class="clearit"></div>
    
    <div class="search_login_box right"><?php 
    
    	//print drupal_render(drupal_get_form('search_block_form')); 
    	
    	$block = module_invoke('search', 'block_view', 'form');
    	print render($block['content']);
    	
    	?></div>
    
    
    	<!-- <ul class="nav-bar right">
    		<li class="domain"><i class="foundicon-globe"></i><a href="<?php echo $siteurl?>/?q=domains">DOMAIN</a></li>
	        <li class="techno"><i class="awesome-desktop"></i><a href="<?php echo $siteurl?>/?q=technology">TECHNOLOGIES</a></li>
	        <li class="projects"><i class="awesome-dropbox"></i><a href="<?php echo $siteurl?>/?q=projects">PROJECTS</a></li>
	        <?php 
	        //global $user;
	        //if ($user->uid != 0) {
	        	?>
	        		<li class="projects"><i class="awesome-signout"></i><a href="<?php //echo $siteurl?>/?q=user/logout">Logout</a></li>
	        	<?php 
	       // }
	        ?>
	        
      	</ul>
        -->
      <div class="clearit"></div> </div>
    	
    	
    	
    	
    </div>
  </div>
  
  <!-- End Header and Nav -->
  <?php 
  	//echo path_is_admin(current_path());
  	if ($is_front){
		  include('page-front.tpl.php');
  	}else if(isset($node) and node_type_get_name($node) == "Project"){
  			
  		?>
  		<div class="row">
        <div class="section-container vertical-tabs" data-section="vertical-tabs" data-options="deep_linking: true;">
  			<section>
			<p class="title columns three" data-section-title><a href="#"><span class="awesome-chevron-sign-right"></span>Overview</a></p>
            <div class="columns nine pagecontent" data-section-content>
                <div class='pagecontent'>
                    <?php print render($page['content']);?>
                </div>
            </div>
            </section>
            
            <?php 
            	$folders = array(
            			"Project Management Plan" => "field_project_management_plan",
            			"Requirements" => "field_requirements",
            			"Development" => "field_development",
            			"Quality" => "field_quality",
            			"UI" => "field_ui",
            			"BRM" => "field_brm",
            			"Project Monitoring and Control" => "field_project_monitoring_and_con",
            			 );
            	foreach($folders as $key => $value){
            		?>
            		<section>
					<p class="title columns three" data-section-title><a href="#"><span class="awesome-chevron-sign-right"></span><?php echo $key?></a></p>
		            <div class="columns nine pagecontent" data-section-content>
		                <div class='pagecontent'>
		                	<div class="region region-content">
		                	<?php 
		                		echo $key."<br>";
		                		$nodeval = $node->$value;
		  						foreach($nodeval['und'] as $files){
		  							$imgsrc = "";
		  							//echo $files['filemime'];
		  							switch($files['filemime']){
		  								case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" :
		  									$imgsrc = "x-office-spreadsheet.png";
		  								break;
		  								case "application/vnd.ms-excel":
		  									$imgsrc = "x-office-spreadsheet.png";
		  								break;
		  								case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
		  									$imgsrc = "x-office-document.png";
		  								break;
		  								case "application/msword":
		  									$imgsrc = "x-office-document.png";
		  								break;
		  								
		  							}
		  							$url = file_create_url($files['uri']);
		  							?>
		  								<span class="file" style="display:block"><img src="/ADM_KB/modules/file/icons/<?php echo $imgsrc;?>" title="<?php echo $files['filemime'];?>" alt="" class="file-icon"> <a type="<?php echo $files['filemime'];?>; length=<?php echo $files['filesize']?>" href="<?php echo $url; ?>"><?php echo $files['filename'];?></a></span>
		  							<?php 
		  												
		  						}
		  					?>
		  					</div>
		                </div>
		            </div>
		            </section>
            		<?php 
            	}
            ?>
            
            
  			
            
            
  		</div>
        </div>
        
        
  		<?php 
  }else{
	echo "<div class='row'>";
		echo "<aside class='columns three section-container accordion' data-section='vertical-accordion' data-options='deep_linking: true;'>
     <section>
   	 <h4 class='title columns three' data-section-title>By Division</h4>
     <div class='controls_chkbox' data-section-content>
     <label><input type='checkbox'/> ADM</label>
     <label><input type='checkbox'/> IVV</label>
     <label><input type='checkbox'/> Prolifics</label>
	 </div>
	 </section>
	 
	 <section>
     <h4 class='title columns three' data-section-title>By Manager</h4>
     <div class='controls_chkbox' data-section-content>
     <label><input type='checkbox'/> Raghu</label>
     <label><input type='checkbox'/> Satyavarupu</label>
     <label><input type='checkbox'/> Narendra</label>
     <label><input type='checkbox'/> Krishna Maladi</label>
     </div>
	 </section>
	 
	 <section>
     <h4 class='title columns three' data-section-title>By Technology</h4>
     <div class='controls_chkbox' data-section-content>
     <label><input type='checkbox'/> Java</label>
     <label><input type='checkbox'/> IBM</label>
     <label><input type='checkbox'/> .NET</label>
     </div>
	 </section>
	 
	 <input type='button' value='FILTER' class='filterbutton'/>
	 
	 <hr class='behind'/>
	 <section>
	  ";
		print render($page['left_region']);
		
		echo "</section>
	 
	 <section>
	  <h5>Our Services</h5>
	  <ul>
		  <li><a href='".$siteurl."/?q=domains'>DOMAINS</a></li>
		  <li><a href='".$siteurl."/?q=technology'>TECHNOLOGIES</a></li>
		  <li><a href='".$siteurl."/?q=capabilities'>Capabilities</a></li>
	  </ul>
	 </section>
	 
    </aside>";
		
		echo "<div class='columns nine pagecontent'>";
		print render($page['content']);
		echo "</div>";
		
  	echo "</div>";
  }
 
     ?>
 
  <!-- Footer -->
  <footer class="row">
    <!-- <div class="twelve columns">
      <div class="row">
        <div class="two columns">
        <h3>About us</h3>
          <p>Ex decore equidem detracto vis, nihil labores euripidis an sea. Nisl solet nonumes ne has, eos nostrum antiopam aliquando at no reque. Ex decore equidem detracto vis, nihil labores euripidis an sea. Nisl solet nonumes ne has</p>
        </div>
        <div class="two columns">
        <h3>Browse pages</h3>
          <ul class="link-list right">
            <li><a href="#">DOMAINS</a></li>
            <li><a href="#">PROJECTS</a></li>
            <li><a href="#">TECHNOLOGIES</a></li>
            <li><a href="#">WEB DESIGN</a></li>
            <li><a href="#">WEB DEVELOPMENT</a></li>
            <li><a href="#">INTERNET MARKETING SERVICES</a></li>
            <li><a href="#">WORDPRESS & JOOMLA DEVELOPMENT</a></li>
          </ul>
        </div>
        
        
        <div class="three columns social_icons">
        <h3>Social Networks</h3>
          <ul class="link-list">
            <li><a href="#" class="socialcon-facebook"><span>Prolifics@facebook.com</span></a></li>
            <li><a href="#" class="socialcon-twitter"><span>Prolifics@twitter.com</a></span></li>
            <li><a href="#" class="socialcon-youtube"><span>Prolifics@youtube.com</a></span></li>
            <li><a href="#" class="socialcon-linkedin"><span>Prolifics@linkedin.com</a></span></li>
          </ul>
          <a href="@"><img src="<?php// echo $image_path?>/images/prolifics_logo.png" alt="Prolifics"/></a>
        </div>
      </div>
      
     
    </div> 
    
   <div class="twelve columns support">
    <div class="two columns">
    <a href="#"><img src="<?php //echo $image_path?>/images/mail_icon.png" alt="aupport"/></a>
    </div>
    
    <div class="three columns cpoyright">
    © PROLIFICS 2014 - All right reserved 
    </div>
    
   </div> 
    -->
  <div class="seven prolifics"><a href="@"><img src="<?php echo $image_path?>/images/prolifics_logo.png" alt="Prolifics"/></a></div>
  </footer>
  
  <script>
    $(document).foundation();
  	$(function() {
	 //$( ".accordion" ).accordion();
	});

	$(document).ready(function(){
		$('.login').click(function(){
			$(this).next('#login-content').slideToggle();
			$(this).toggleClass('active');					
			}

		)
	});
</script>
 


   