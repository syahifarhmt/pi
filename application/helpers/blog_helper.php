<?php


function PrintMenu()
{
	$CI = &get_instance();
	$CI->load->database();
	$menu = $CI->db->get('page')->result();

	$PrintMenu = '';
	foreach ($menu as $value) {
		$PrintMenu .= '<li><a href="#">'.$value->page_name.'</a></li>';
	}

	return $PrintMenu;
}

?>