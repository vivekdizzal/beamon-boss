<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('error_message'))
{
	function error_message( $string="" ) 
	{
		return ' <div class="alert alert-danger">
   				 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 				  '.$string.'</div>';
	}
}

if ( ! function_exists('success_message'))
{
	function success_message( $string="" ) 
	{
		return '<div class="alert alert-success alert-full fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'.$string.'</div>';
	}
}


