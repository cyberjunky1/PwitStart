<?php

/**
 * convert stamp to Date
 * @author  hd
 * @param string
 * @return Char
 */
function smarty_modifier_mwDateToStamp($string) {
	return substr ( $string, 6, 4 ) . substr ( $string, 3, 2 ) . substr ( $string, 0, 2 );
}
