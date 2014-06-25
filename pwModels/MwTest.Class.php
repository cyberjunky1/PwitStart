<?php
class MwTest extends MwModel {
	const TABLE_NAME = 'test';
	const TABLE_ID = 'TST_ID';
	const ROW_STATUS = 'TST_ROW_STATUS';
	function __construct($i = '') {
		parent::__construct ( $i );
	}
	protected $TST_ID = "";
	protected $TST_V1 = "";
	protected $TST_V2 = "";
	protected $TST_ROW_STATUS = "";
}
