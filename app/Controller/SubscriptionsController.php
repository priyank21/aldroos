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
		if (isset($this->request->data['Subscription']['search'])) {
			$keyword = $this->request->data['Subscription']['search'];
			$this->paginate = array(
				'limit' => 6,
				'order' => array('id' => 'desc'),
				'conditions' => array(
					'OR' => array('subscription_plan_name LIKE' => '%' . $keyword . '%'),

				),
			);
		} else {
			$keyword = '';
			$this->paginate = array(
				'limit' => 6,
				'order' => array('id' => 'desc'),

			);
		}

		$subscription = $this->paginate('Subscription');
		$this->set('Subscription', $subscription);
	}

//add subscription
	public function admin_addsubscription() {
		if ($this->request->is("post")) {
			if ($this->Subscription->hasAny(array('Subscription.subscription_plan_name' => $this->request->data['Subscription']['subscription_plan_name']))) {
				//die('here_1');

				$this->Session->setFlash('Subscription plan with same name already exist!!!', 'default', array('class' => 'alert alert-danger'), 'admin_subscription');
				return $this->redirect($this->referer());
			} else {
				if ($this->Subscription->save($this->request->data)) {

					$this->Session->setFlash('Subscription plan successfully saved!!!', 'default', array('class' => 'alert alert-Success'), 'admin_subscription');
					return $this->redirect(array('controller' => 'subscriptions', 'action' => 'subscriptionall'));

				}
			}

			// pr($this->request->data);die();
		}
	}

//view subscription
	public function admin_viewsubscription($id = null) {
		//pr('hello');die();

		$get_data = $this->Subscription->find(
			'first', array(
				'conditions' => array('id' => $id),

			)
		);
		$this->set('Subscription_val', $get_data);
		// pr($get_data);die();

	}

//delete subscription
	public function admin_deletesubscription($id = null) {
		//pr('here');die();
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Subscription->id = $id;
		if (!$this->Subscription->exists()) {
			throw new NotFoundException('Invalid Subscription');
		}
		if ($this->Subscription->delete()) {
			$this->Session->setFlash('Subscription  plan deleted!!!', 'default', array('class' => 'alert alert-success'), 'admin_subscription');

			return $this->redirect(array('controller' => 'subscriptions', 'action' => 'subscriptionall'));

		}
		$this->Session->setFlash('There is some error in deleting Subscription  plan !!!', 'default', array('class' => 'alert alert-danger'), 'admin_subscription');

		return $this->redirect(array('controller' => 'subscriptions', 'action' => 'subscriptionall'));
	}
	//edit subscription Plan
	public function admin_editsamplevideo($id = null) {

		if ($this->request->is('post') || $this->request->is('put')) {
			//pr($id);die();
			$get_same_name_file = $this->Subscription->find('first',
				array(
					'conditions' => array(
						'Subscription.id !=' => $id,
						'Subscription.subscription_plan_name' => $this->request->data['Subscription']['subscription_plan_name']))
			);
			//pr($get_same_name_file);die();
			if ($get_same_name_file) {
				$this->Session->setFlash('There is Subscription plan of same name !!!', 'default', array('class' => 'alert alert-danger'), 'admin_subscription');
				return $this->redirect($this->referer());
			} else {
				$this->Subscription->id = $id;
				if ($this->Subscription->save($this->request->data)) {
					$this->Session->setFlash('Subscription plan  Updated successfully', 'default', array('class' => 'alert alert-Success'), 'admin_subscription');
					return $this->redirect(array('controller' => 'subscriptions', 'action' => 'subscriptionall'));

				}
			}
		} else {
			$this->request->data = $this->Subscription->read(null, $id);
			$Subscription = $this->Subscription->find('first', array('conditions' => array('Subscription.id' => $id)));
			$this->set('Subscription', $Subscription);
		}
	}

}
