<?php

function check_login()
{
	$CI;
	$CI =& get_instance();
	return $CI->session->userdata('login') ? false : redirect('user/login','refresh');
}