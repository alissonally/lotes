<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.assign.php
 * Type:     function
 * Name:     assign
 * Purpose:  assign a value to a template variable
 * -------------------------------------------------------------
 */
 
function smarty_function_wp_function($params, &$smarty)
{
	
	global $post;	
	
	$function = isset($params['f']) ? $params['f'] : '';
	$post = isset($params['post']) ? $params['post'] : null;
	$show = isset($params['show']) ? $params['show'] : true;		
	$r_name = isset($params['r']) ? $params['r'] : 'wp_return';
		
	if(strlen($function) > 0 && function_exists($function)){
					
		unset($params['f']); unset($params['post']);		
		$r = call_user_func_array($function, $params);
		
		if($show)
			return $r;
			
		$smarty->assign($r_name, $r);	
	}
	    
}
?>