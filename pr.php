<?php
/**
 * @package PR Debug
 * @version 1.0
 */
/*
Plugin Name: PR Debug
Plugin URI: http://webplantmedia.com
Description: Call this function to 'pretty print' any variable or array. This comes in very hand when debugging your php code.
Author: Chris Baldelomar
Version: 1.0
Author URI: http://webplantmedia.com
*/

function pr($value=''){
	$btr=debug_backtrace();
	$line=$btr[0]['line'];
	$file=basename($btr[0]['file']);
	print"<pre>$file:$line</pre>\n";
	if(is_array($value)){
		print"<pre>";
		print_r($value);
		print"</pre>\n";
	}elseif(is_object($value)){
		print"<pre>";
		print_r($value);
		print"</pre>\n";
	}else{
		print("<p>&gt;${value}&lt;</p>");
	}
} 
