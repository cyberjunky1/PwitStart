<?php

/**
 * convert gender to Char
 * @author  hd
 * @param string
 * @return Char
 */
function smarty_modifier_mwRem8($string) {
	return substr ( $string, 8, 8 );
}
