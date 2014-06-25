<?php
class MwMensualites extends MwModel {
	const TABLE_NAME = 's_mensulatite';
	const TABLE_ID = 'MEN_ID';
	function __construct($i = '') {
		parent::__construct ( $i );
	}
	
	/**
	 * getListByFormation
	 * 
	 * @param formation $frm_id        	
	 * @return list:
	 */
	public static function getListByFormation($frm_id) {
		$cmd = "select s_mensulatite.* ,s_formation.*,s_etudiant.* from s_mensulatite
				left outer join s_etudiant on (s_etudiant.ETU_ID = s_mensulatite.MEN_ETU_ID)
				left outer join s_formation on (s_formation.FRM_ID = s_mensulatite.MEN_FRM_ID) 
				where 
				s_mensulatite.MEN_FRM_ID = '$frm_id'
				order by FRM_NAME, ETU_NOM, ETU_PRENOM ;";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		
		return $list;
	}
	public static function coupleExiste($frm_id, $etudId) {
		$cmd = "select count(*)as cnt from s_mensulatite
		where
		s_mensulatite.MEN_FRM_ID = '$frm_id' and
		s_mensulatite.MEN_ETU_ID = '$etudId' 
		";
		MwDebug::debugInLogFile ( $cmd );
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$obj = $prep->fetch ( PDO::FETCH_OBJ );
		
		return $obj->cnt;
	}
	protected $MEN_ID = "";
	protected $MEN_ETU_ID = "";
	protected $MEN_FRM_ID = "";
	protected $MEN_MENSUALITE = "";
	protected $MEN_PRIX_FRM = "";
}




