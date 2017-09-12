<?php
App::uses('AppController', 'Controller');

class LinksController extends AppController {

	function admin_index() {

		Configure::write('debug', 2);
		$links = $this->Link->find('all');

		$this->set('links', $links);
	}

	function admin_edit($id) {
		if (!$id) {
			throw new NotFoundException(__('Invalid ID'));
		}

		$link = $this->Link->findById($id);

		if ($this->request->is('post')) {
			$this->request->id = $id;
			if ($this->Link->save($this->request->data)) {

				$this->Session->setFlash('Link updated successfully', 'default', array('class' => 'alert alert-success'), 'admin_link');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Link not updated !!', 'default', array('class' => 'alert alert-error'), 'admin_link');
			}
		}

		$this->request->data = $link;
	}
}

?>