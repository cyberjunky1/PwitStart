<?php
class MwEtudiants extends MwModel {
	const TABLE_NAME = 's_etudiant';
	const TABLE_ID = 'ETU_ID';
	const ROW_STATUS = 'ETU_ROW_STATUS';
	function __construct($i = '') {
		parent::__construct ( $i );
	}
	
	public static function getFullList() {
		$cmd = "select s_etudiant.*, s_formation.FRM_NAME  from s_etudiant 
				left outer join s_formation on (s_formation.FRM_ID = s_etudiant.ETU_FRM_ID)
				where 
				ETU_ROW_STATUS <> 1 
				order by ETU_NOM, ETU_PRENOM ;";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		
		return $list;
	}
	
	public static function getSelectEtudiantList() {
		$cmd = "select ETU_ID, ETU_NOM,ETU_PRENOM  from s_etudiant ";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		$lst = array ();
		foreach ( $list as $row ) {
			$lst [$row ['ETU_ID']] = $row ['ETU_NOM'] . " " . $row ['ETU_PRENOM'];
		}
		return $lst;
	}
	
	/**
	 * getListEtudByFormation
	 * 
	 * @param formation $frm_id        	
	 * @return list:
	 */
	public static function getListEtudByFormation($frm_id) {
		$cmd = "select ETU_ID, CONCAT(ETU_NOM,' ',ETU_PRENOM)as nomPrenom from s_etudiant
		where
		ETU_FRM_ID = '$frm_id'
		and ETU_ROW_STATUS = 0
		order by ETU_NOM, ETU_PRENOM ;";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		
		return $list;
	}
	protected $ETU_ID = "";
	protected $ETU_FRM_ID = "";
	protected $ETU_NOM = "";
	protected $ETU_PRENOM = "";
	protected $ETU_ROW_STATUS = "";
}




