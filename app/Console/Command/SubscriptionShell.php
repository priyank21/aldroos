<?php

App::uses('Shell', 'Console');
class SubscriptionShell extends AppShell {
//checksuscription change data if subscription expired
	public function CheckSubscription() {
		Configure::write('debug', 2);
		//echo 'hello';
		$todaysDate = date('Y-m-d');
		$this->loadModel('User');

		$get_login_user_data = $this->User->find('first', array('conditions' => array('User.subscription_paymant_status' => 1, 'User.subscription_start_date <' => $todaysDate, 'User.subscription_end_date <' => $todaysDate)));
		//print_r($get_login_user_data);die();
		if ($get_login_user_data) {
			$this->User->id = $get_login_user_data['User']['id'];
			$new = $this->User->save(array(
				'User' => array(
					'subscription_plan_name' => 'NULL'
					, 'subscription_rate' => 00.00
					, 'subscription_status' => 2
					, 'paymant_txn_id' => '	NULL'
					, 'subscription_paymant_status' => 0
					, 'subscription_paymant_status_val' => 'NULL'),
			)
			);
			if ($new) {
				echo 'sub cancle for user' . $get_login_user_data['User']['id'];
			}
		}

		die();
	}
}

?>