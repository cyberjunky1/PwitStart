<?php
class logOutController extends PwController {
	public function actionIndex() {
		$user = new PwUser ( $_SESSION ['userId'] );
		PwTrace::trace_logout ();
		PwConnexion::getInstance ()->logOut ();
		PwConnexion::checkConnexion ();
	}
}
