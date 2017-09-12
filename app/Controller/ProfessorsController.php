<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class ProfessorsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('');
	}
///professor index page
	public function admin_index() {
		
		if (isset($this->request->data['Professor']['search'])) {
			$keyword = $this->request->data['Professor']['search'];
			//pr($keyword);die();
		} else {
			$keyword = '';
		}
		$this->paginate = array(
			'limit' => 6,
			'recursive' => 2,
			'order' => array('id' => 'desc'),
			'conditions' => array(
				'OR' => array('professor_name LIKE' => '%' . $keyword . '%'),
			),
		);
		$Professor = $this->paginate('Professor');

		$this->set('Professor', $Professor);
	}

//add professor to database
	public function admin_add() {
		if ($this->request->is('post')) {
			//print_r($this->request->data);exit();
			$this->Professor->create();
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash('Professor Has been add successfully !!', 'default', array('class' => 'alert alert-success'), 'admin_addProfessor');
				return $this->redirect(array('action' => 'admin_index'));
				
			} else {
				$this->Session->setFlash('There is some error in addin your request please try again later !!', 'default', array('class' => 'alert alert-success'), 'admin_addProfessor');
			}
		}
	}

// prof view page 
	public function admin_view($id = null) {
		$this->Professor->id = $id;
		if (!$this->Professor->exists()) {
			throw new NotFoundException('Invalid user');
		}
		$this->set('Professor', $this->Professor->read(null, $id));
	}

	
	//delete prof
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Professor->id = $id;
		if (!$this->Professor->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->Professor->delete()) {
			$this->Session->setFlash('Professor is deleted successfully!!', 'default', array('class' => 'alert alert-success'), 'admin_addProfessor');
			return $this->redirect(array('action' => 'admin_index'));
		}
		$this->Session->setFlash('Professor is not deleted please try again later', 'default', array('class' => 'alert alert-danger'), 'admin_addProfessor');
		return $this->redirect(array('action' => 'admin_index'));
	}


//edit professor 
	public function admin_edit($id = null) {
		$this->Professor->id = $id;
		if (!$this->Professor->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash('The Professor details has been updated successfully!!', 'default', array('class' => 'alert alert-success'), 'admin_addProfessor');
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash('The Professor can not be saved. Please, try again later.', 'default', array('class' => 'alert alert-danger'), 'admin_addProfessor');
			}
		} else {
			$this->request->data = $this->Professor->read(null, $id);
		}

	}




}
