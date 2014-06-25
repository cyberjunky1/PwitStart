<?php
class MwPaiements extends MwModel {
	const TABLE_NAME = 's_paiement';
	const TABLE_ID = 'PYE_ID';
	function __construct($i = '') {
		parent::__construct ( $i );
	}
	public static function getListDetails($mend_id) {
		$cmd = "select * from s_paiement
				where
				s_paiement.PYE_MEN_ID = '$mend_id'
				order by  PYE_DATE;";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		
		return $list;
	}
	
	/**
	 * delete pa
	 */
	public static function deletePaiementByMens($mend_id) {
		$cmd = "delete from s_paiement
				where
				s_paiement.PYE_MEN_ID = '$mend_id'
				";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$prep->fetchAll ( PDO::FETCH_ASSOC );
	}
	
	/**
	 * stat1
	 */
	public static function stat1() {
		$cmd = "
				SELECT 1 as num , FRM_NAME,sum(PYE_PREVISION) as PREVISION, sum(PYE_PAIEMENT)as PAIEMENT from s_paiement 
				left outer join s_formation on (s_formation.FRM_ID  = s_paiement.PYE_FRM_ID)
				where 
				FRM_ROW_STATUS <>1 
				group by FRM_ID
				order by FRM_NAME;";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		
		return $list;
	}
	
	/*
	 * stat1
	 */
	public static function stat2() {
		$cmd = "select 1 as num, ETU_NOM,ETU_PRENOM,sum(PYE_PREVISION) as PREVISION, sum(PYE_PAIEMENT)as PAIEMENT from s_paiement
				left outer join s_etudiant on (s_etudiant.ETU_ID  = s_paiement.PYE_ETU_ID)
				where 
				ETU_ROW_STATUS <>1 
				group by ETU_ID
				order by ETU_NOM,ETU_PRENOM;";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		return $list;
	}
	
	/*
	 * stat3
	 */
	public static function stat3($date1, $date2) {
		$cmd = "select *, s_formation.FRM_NAME, SUM(s_paiement.PYE_PREVISION) as PREV, SUM(s_paiement.PYE_PAIEMENT) as PAIE,
				(SUM(s_paiement.PYE_PREVISION) - SUM(s_paiement.PYE_PAIEMENT)) as delta
				from  s_paiement
				left outer join s_formation on (s_formation.FRM_ID = s_paiement.PYE_FRM_ID)
				where
				
				s_paiement.PYE_DATE >= '$date1' and s_paiement.PYE_DATE <='$date2'
				group by
				s_formation.FRM_ID
				order by s_formation.FRM_NAME
				";
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		return $list;
	}
	
	/*
	 * stat4
	 */
	public static function stat4($date1, $date2, $frm) {
		$cmd = "
				select *, s_formation.FRM_NAME,s_etudiant.ETU_NOM,s_etudiant.ETU_PRENOM, SUM(s_paiement.PYE_PREVISION) as PREV, SUM(s_paiement.PYE_PAIEMENT) as PAIE,
				(SUM(s_paiement.PYE_PREVISION) - SUM(s_paiement.PYE_PAIEMENT)) as delta
				from  s_paiement
				left outer join s_formation on (s_formation.FRM_ID = s_paiement.PYE_FRM_ID)
				left outer join s_etudiant on (s_etudiant.ETU_ID = s_paiement.PYE_ETU_ID)
				where
					s_paiement.PYE_DATE >= '$date1' and s_paiement.PYE_DATE <='$date2' and 
					s_paiement.PYE_FRM_ID = '$frm'
					
				group by s_paiement.PYE_FRM_ID, s_paiement.PYE_ETU_ID
				order by s_formation.FRM_NAME
		";
		
		MwDebug::debugInLogFile ( $cmd );
		
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		return $list;
	}
	protected $PYE_ID = "";
	protected $PYE_MEN_ID = "";
	protected $PYE_FRM_ID = "";
	protected $PYE_ETU_ID = "";
	protected $PYE_DATE = "";
	protected $PYE_PREVISION = "";
	protected $PYE_PAIEMENT = "";
	protected $PYE_REMIS = "";
	protected $PYE_DATE_PAYEMENT = "";
	protected $PYE_MODE = "";
}




