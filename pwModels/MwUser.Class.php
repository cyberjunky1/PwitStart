<?php
class MwUser extends MwModel {
	const TABLE_NAME = 's_user';
	const TABLE_ID = 'USR_ID';
	const ROW_STATUS = 'USR_DELETED';
	function __construct($i = '') {
		parent::__construct ( $i );
	}
	
	/**
	 * checkPassword
	 *
	 * @param String $userId        	
	 * @param
	 *        	String MD5 $pass
	 */
	public static function checkPassword($login, $pass, &$usrid = "") {
		$cmd = "select USR_ID from s_user
				where USR_LOGIN=:login
				and USR_PSW=:pass
				and USR_ACTIVE = '1'
				and USR_DELETED = '0'
				;";
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->bindValue ( ':login', $login, PDO::PARAM_STR );
		$prep->bindValue ( ':pass', $pass, PDO::PARAM_STR );
		$prep->execute ();
		if ($prep->rowCount () >= 1) {
			$obj = $prep->fetch ( PDO::FETCH_OBJ );
			$usrid = $obj->USR_ID;
			return true;
		}
		return false;
	}
	public static function getFullList() {
		$cmd = "select *    from s_user 
				where USR_DELETED <> 1 order by  
				USR_LNAME,USR_FNAME, USR_LOGIN;";
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->execute ();
		$list = $prep->fetchAll ( PDO::FETCH_ASSOC );
		
		return $list;
	}
	protected $USR_ID = "";
	protected $USR_LNAME = "";
	protected $USR_FNAME = "";
	protected $USR_LOGIN = "";
	protected $USR_PSW = "";
	protected $USR_MAIL = "";
	protected $USR_RIGHTS = "";
	protected $USR_ACTIVE = "";
	protected $USR_DELETED = "";
}




