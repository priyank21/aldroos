<?php
App::uses('AppController', 'Controller');
class DashboardsController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(); 
	}

	public function admin_index() {
		$this->loadModel('User');
		$users = $this->User->find('all');
		$numUsers = sizeof($users);
		$this->set('usercount', $numUsers);
		//sample video count
		$this->loadModel('Samplevideo');
		$Samplevideo = $this->Samplevideo->find('all');
		$Samplevideonumber = sizeof($Samplevideo);
		$this->set('Samplevideonumbercount', $Samplevideonumber);
		$this->loadModel('Course');
		$Course = $this->Course->find('all');
		$Coursenumber = sizeof($Course);
		$this->set('Coursecount', $Coursenumber);
		//print_r($numUsers);die();

	}
}