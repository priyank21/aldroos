<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class FaqsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}
	//index page
	public function index() {
		$data = $this->Faq->find("all");
		$this->set(compact("data"));
	}
//show faqs
	public function admin_showfaqs() {
		$data = $this->Faq->find("all");
		$this->set(compact("data"));
	}

	public function admin_viewfaqs($id = null) {
		$this->Faq->id = $id;
		if (!$this->Faq->exists()) {
			throw new NotFoundException('Invalid Faq id');
		}
		$data = $this->Faq->find("first", array('conditions' => array('Faq.id' => $id)));
		$this->set(compact("data"));
	}

	///delete faq
	public function admin_deletefaqs($id = null) {
		$this->Faq->id = $id;
		if (!$this->Faq->exists()) {
			throw new NotFoundException('Invalid Faq id');
		}
		$this->Faq->delete($id);
		$this->Session->setFlash('Faq Has been deleted successfully !!', 'default', array('class' => 'alert alert-success'), 'admin_editfaqs');
		return $this->redirect(array('action' => 'admin_showfaqs'));
	}

	// edit faq
	public function admin_editfaqs($id = null) {
		$this->Faq->id = $id;
		if (!$this->Faq->exists()) {
			throw new NotFoundException('Invalid Faq id');
		} elseif ($this->request->is('post') || $this->request->is('put')) {
			//print_r($this->request->data); exit();
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash('Faq Has been edit successfully !!', 'default', array('class' => 'alert alert-success'), 'admin_editfaqs');
				return $this->redirect(array('action' => 'admin_showfaqs'));
			} else {
				$this->Session->setFlash('There is some error in updating your request please try again later !!', 'default', array('class' => 'alert alert-success'), 'admin_editfaqs');
			}
		} else {
			$data = $this->Faq->find("first", array('conditions' => array('Faq.id' => $id)));
			$this->set('data', $data);
			//print_r($data);die();
			$this->request->data = $data;
		}
	}
	///add faq
	public function admin_addfaqs() {
		if ($this->request->is('post')) {
			//print_r($this->request->data);exit();
			$this->Faq->create();
			if ($this->Faq->save($this->request->data)) {
				$this->Session->setFlash('Faq Has been add successfully !!', 'default', array('class' => 'alert alert-success'), 'admin_editfaqs');
				return $this->redirect(array('action' => 'admin_showfaqs'));
			} else {
				$this->Session->setFlash('There is some error in addin your request please try again later !!', 'default', array('class' => 'alert alert-success'), 'admin_editfaqs');
			}
		}
	}

}
?>