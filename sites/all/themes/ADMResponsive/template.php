<?php 
function admresponsive_preprocess_page(&$vars) {
	global $user;
	if ($user->uid != 0) {
		$new_links['logout-link'] = array(
				'attributes' => array('title' => 'Logout link'),
				'href' => 'user/logout',
				'title' => 'Logout'
		);
		$vars['main_menu'] = array_merge_recursive($vars['main_menu'], $new_links);
		/*if (isset($vars['node'])) {
			// If the node type is "blog" the template suggestion will be "page--blog.tpl.php".
			$vars['theme_hook_suggestions'][] = 'page__'. str_replace('_', '--', $vars['node']->type);
		}*/
	}
}

function admresponsive_preprocess(&$vars){
	$vars['image_path'] =  $GLOBALS['base_path'].drupal_get_path('theme',$GLOBALS['theme'])."/";
	$vars['siteurl'] = $GLOBALS['base_url'];
}

function admresponsive_process_region(){
	$vars['outer_prefix'] = '<div class="test">';
	$vars['inner_prefix'] = '<div class="region-inner test">';
	$vars['inner_suffix'] = '</div>';
	$vars['outer_suffix'] = '</div>';
}

function admresponsive_form_alter(&$form, &$form_state) {
	
	$form['body']['#after_build'][] = 'admresponsive_customize_node_form';
}
	
function admresponsive_customize_node_form(&$form) {
	/*$form[LANGUAGE_NONE][0]['format']['guidelines']['#access'] = FALSE;
	$form[LANGUAGE_NONE][0]['format']['format']['#access'] = FALSE;
	$form[LANGUAGE_NONE][0]['format']['help']['#access'] = FALSE;
	$form[LANGUAGE_NONE][0]['format']['#theme_wrappers'] = NULL;*/
	$form[LANGUAGE_NONE][0]['format']['#access'] = True;
	return $form;
}

function admresponsive_js_alter(&$javascript) {
	unset($javascript['misc/tabledrag.js']);
}



?>