<?php

/**
 * convert gender to Char
 * @author  hd
 * @param string
 * @return Char
 */
function smarty_modifier_mwStampToDate($string) {
	return substr ( $string, 6, 2 ) . '/' . substr ( $string, 4, 2 ) . '/' . substr ( $string, 0, 4 );
}
