<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class SubscriptionsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('');
	}
///subscription plan
	public function admin_subscriptionall() {
		pr('hello');die();
	}

//add subscription
	public function admin_addsubscription() {
		pr('helloooo');die();
	}
}
