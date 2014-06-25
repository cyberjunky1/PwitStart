<?php
class MwTrace extends MwModel {
	const TABLE_NAME = 's_trace';
	const TABLE_ID = 'TRC_ID';
	function __construct($i = '') {
		parent::__construct ( $i );
	}
	public static function trace_login() {
		$usrId = $_SESSION ['userId'];
		if (! isset ( $usrId )) {
			return false;
		}
		self::closeLostedConnexions ( $usrId );
		
		$trace = new MwTrace ();
		$trace->TRC_USR_ID = $usrId;
		$trace->TRC_DATE_CONN = date ( "YmdHis" );
		$trace->TRC_DATE_DESC = "";
		$trace->TRC_REMOTE_ADDR = $_SERVER ['REMOTE_ADDR'];
		$trace->TRC_REMOTE_HOST = gethostbyaddr ( $_SERVER ['REMOTE_ADDR'] );
		$trace->TRC_HTTP_USER_AGENT = $_SERVER ['HTTP_USER_AGENT'];
		$trace->TRC_COMMENT = "";
		$trace->save ();
		return true;
	}
	public static function trace_logout() {
		$usrId = $_SESSION ['userId'];
		if (! isset ( $usrId )) {
			return false;
		}
		$cmd = "SELECT TRC_ID FROM s_trace WHERE TRC_USR_ID = :id";
		$prep = MwPDO::getInstance ( MwPDO::DB_0 )->prepare ( $cmd );
		$prep->bindValue ( ':id', $usrId, PDO::PARAM_STR );
		$prep->execute ();
		$obj = $prep->fetch ( PDO::FETCH_OBJ );
		$trace = new MwTrace ( $obj->TRC_ID );
		$trace->TRC_DATE_DESC = date ( "YmdHis" );
		$trace->save ();
	}
	private static function closeLostedConnexions($usrId) {
		/*
		 * $cmd = "SELECT TRC_ID FROM s_trace WHERE TRC_USR_ID = :id" $prep = MwPDO::getInstance(MwPDO::DB_0)->prepare($cmd); $prep->bindValue(':id', $usrId, PDO::PARAM_STR); $prep->execute(); foreach ($obj = $prep->fetch(PDO::FETCH_OBJ)) { $trcId = $obj->USR_ID; return true; }
		 */
	}
	protected $TRC_ID = "";
	protected $TRC_USR_ID = "";
	protected $TRC_DATE_CONN = "";
	protected $TRC_DATE_DESC = "";
	protected $TRC_REMOTE_ADDR = "";
	protected $TRC_REMOTE_HOST = "";
	protected $TRC_HTTP_USER_AGENT = "";
	protected $TRC_COMMENT = "";
}




