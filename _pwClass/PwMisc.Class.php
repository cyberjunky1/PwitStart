<?php
/**
 (C) 2014 DJERROUD Halim.

 This file is part of pwit.

 Pwit is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 Pwit is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Pwit.  If not, see <http://www.gnu.org/licenses/>.
 */
abstract class PwMisc {
	
	/**
	 * Concatenation directory
	 * 
	 * @param String $dir1        	
	 * @param String $dir2        	
	 */
	public static function concat_dirs($dir1, $dir2) {
		$trailer = substr ( $dir1, - 1 );
		$header = substr ( $dir2, 0, 1 );
		if ($header == '/' or $header == "\\") {
			$dir2 = substr ( $dir2, 1, strlen ( $dir2 ) - 1 );
		}
		if ($trailer == '/' or $trailer == "\\") {
			$dir1 = substr ( $dir1, 0, strlen ( $dir1 ) - 1 );
		}
		return $dir1 . '/' . $dir2;
	}
	
	/**
	 *
	 * @param unknown $dir        	
	 * @return boolean
	 */
	public static function deleteDirectory($dir) {
		if (! file_exists ( $dir ))
			return true;
		if (! is_dir ( $dir ))
			return unlink ( $dir );
		foreach ( scandir ( $dir ) as $item ) {
			if ($item == '.' || $item == '..')
				continue;
			if (! self::deleteDirectory ( $dir . DIRECTORY_SEPARATOR . $item ))
				return false;
		}
		return rmdir ( $dir );
	}
	
	/**
	 *
	 * @param
	 *        	$sourceDir
	 * @param
	 *        	$targetDir
	 * @return boolean
	 */
	public static function copyDirectory($sourceDir, $targetDir) {
		if (! file_exists ( $sourceDir ))
			return false;
		if (! is_dir ( $sourceDir ))
			return copy ( $sourceDir, $targetDir );
		if (! mkdir ( $targetDir ))
			return false;
		foreach ( scandir ( $sourceDir ) as $item ) {
			if ($item == '.' || $item == '..')
				continue;
			if (! self::copyDirectory ( $sourceDir . DIRECTORY_SEPARATOR . $item, $targetDir . DIRECTORY_SEPARATOR . $item ))
				return false;
		}
		return true;
	}
	public static function dateToStamp($date) {
		return substr ( $date, 6, 4 ) . substr ( $date, 3, 2 ) . substr ( $date, 0, 2 );
	}
	public static function constructId($prefix, $id) {
		return $patId = PwPrefs::getInstance ()->getPrefix () . "." . $prefix . "." . $id;
	}
}
