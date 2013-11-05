<div id="technology">
<div class="technologies">
	<div class="tech">
		<?php 
   		foreach($variables['view']->result as $techresult){
   		//print_r($techresult);
   		?>
	<div class="techno"><span class="border_wt"><img src="images/client_1.png"/></span> <h3><?php echo $techresult->node_title?></h3><div class="clearit"></div>
   	<br/>
   	<div class="clearit"></div>
   	<p><?php 
	   		print_r($capresult->field_body['0']);
	   	?></p>
   	</div>
   		<?php 
   			}
   		?>
   	</div>
   

</div>   


</div>