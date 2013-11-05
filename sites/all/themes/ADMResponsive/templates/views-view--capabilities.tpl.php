<div data-section="accordion" class="section-container accordion">
<?php 
	//$arr = get_defined_vars();
	/*echo "<pre>";
	print_r($variables['view']->result);
	echo "</pre>";
	//print $rows;
	*/
	foreach($variables['view']->result as $capresult){
		?>
		<section class="active">
		<p data-section-title="" class="title"><a class="one" href="#"><?php echo $capresult->node_title?></a></p>
		<div data-section-content="" class="content">
		<img src="images/web_dev.png">
		<div class="disc">
		<h3><?php echo $capresult->node_title?></h3>
		<?php 
			
			print_r($capresult->field_body['0']['raw']['safe_summary']);//
			
			$options = array('absolute' => TRUE);
			$nid = $capresult->nid; // Node ID
			$url = url('node/' . $nid, $options);
		?>
		<br><a href="<?php echo $url;?>">Learn more</a>
		</div>
		</div>
		<div class="clearit"></div>
		</section>
		<?php 
		}
?>
</div>