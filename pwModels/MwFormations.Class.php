<?php
class MwFormations extends MwModel {
	const TABLE_NAME = 's_formation';
	const TABLE_ID = 'FRM_ID';
	const ROW_STATUS = 'FRM_ROW_STATUS';
	function __construct($i = '') {
		parent::__construct ( $i );
	}
	public static function getFullList() {
		$cmd = "select *  from s_formation 
				where 
				FRM_ROW_STATUS <> 1 
				order by FRM_NAME ;";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		
		return $list;
	}
	public static function getSelectFormationList() {
		$cmd = "select FRM_ID, FRM_NAME  from s_formation ";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		$lst = array ();
		foreach ( $list as $row ) {
			$lst [$row ['FRM_ID']] = $row ['FRM_NAME'];
		}
		return $lst;
	}
	protected $FRM_ID = "";
	protected $FRM_NAME = "";
	protected $FRM_LABEL = "";
	protected $FRM_ANNEE = "";
	protected $FRM_ROW_STATUS = "";
}




