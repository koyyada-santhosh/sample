<?php 

function adm_preprocess_page(&$vars) {
	global $user;
	
	if ($user->uid != 0) {
		$new_links['logout-link'] = array(
      								'attributes' => array('title' => 'Logout link'), 
      								'href' => 'user/logout', 
      								'title' => 'Logout'
    								);
		$vars['main_menu'] = array_merge_recursive($vars['main_menu'], $new_links);
  } 
  
	
	 
}



function adm_preprocess(&$vars){
	
	$vars['image_path'] =  $GLOBALS['base_path'].drupal_get_path('theme',$GLOBALS['theme'])."/";
}

?>