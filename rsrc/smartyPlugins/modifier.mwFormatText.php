<?php

/**
 * convert gender to Char
 * @author  hd
 * @param string
 * @return Char
 */
function smarty_modifier_mwFormatText($str) {
	$search = array (
			"\r",
			"\n",
			"null",
			"'" 
	);
	$replace = array (
			"\\r",
			"\\n",
			"",
			"\'" 
	);
	$str = str_replace ( $search, $replace, $str );
	return $str;
}
