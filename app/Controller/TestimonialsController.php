<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class TestimonialsController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}
//home page controller : 18/07/17
	public function admin_index() {
		if (isset($this->request->data['Testimonial']['search'])) {
			$keyword = $this->request->data['Testimonial']['search'];
			//pr($keyword);die();
		} else {
			$keyword = '';
		}
		$this->paginate = array(
			'limit' => 6,
			'recursive' => 0,
			'order' => array('id' => 'desc'),
			'conditions' => array(
				'OR' => array('Auther_name LIKE' => '%' . $keyword . '%'),
			),
		);
		$testimonial = $this->paginate('Testimonial');

		$this->set('testimonial', $testimonial);
	}
//add testimanils : 28/07/2017

	public function admin_add() {
		//pr('hello');die();
		if ($this->request->is("post")) {
			//pr($this->request->data);die();
			$auther_pic = $this->request->data['Testimonial']['auther_pic'];
			$uploadFolder = "auther_pic";
			$uploadPath = WWW_ROOT . 'image/' . $uploadFolder;
			if ($auther_pic['error'] == 0) {
				$imageName = $auther_pic['name'];
				if (file_exists($uploadPath . DS . $imageName)) {
					$imageName = date('His') . $imageName;
				}
				$full_image_path = $uploadPath . DS . $imageName;
				move_uploaded_file($auther_pic['tmp_name'], $full_image_path);
				$this->request->data['Testimonial']['auther_pic'] = $imageName;
			}
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash('Testimonial is succesfully added !!!', 'default', array('class' => 'alert alert-success'), 'admin_testimonial');
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash('There is some error in saving your testimonial please try again !!!', 'default', array('class' => 'alert alert-danger'), 'admin_testimonial');
			}

		}
	}

	//view testimanils : 28/07/2017

	public function admin_view($id = null) {
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException('Invalid View id');
		}
		$get_data = $this->Testimonial->find(
			'first', array(
				'recursive' => 1,
				'conditions' => array('Testimonial.id' => $id),

			)
		);
		$this->set('testimonial', $get_data);
	}

	//delete testimonail
	public function admin_deletetestimonial($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->Testimonial->delete()) {
			$this->Session->setFlash('Testimonial deleted successfully !!!', 'default', array('class' => 'alert alert-success'), 'admin_testimonial');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Course was not deleted please try again later !!', 'default', array('class' => 'alert alert-danger'), 'admin_testimonial');
		return $this->redirect(array('action' => 'index'));
	}

	//edit testimonal
	public function admin_edittestimonial($id = null) {
		if ($this->request->is(array("post", "put"))) {
			//pr($this->request->data);die();
			if ($this->request->data['Testimonial']['auther_pic']['name']) {
				$auther_pic = $this->request->data['Testimonial']['auther_pic'];
				$uploadFolder = "auther_pic";
				$uploadPath = WWW_ROOT . 'image/' . $uploadFolder;
				if ($auther_pic['error'] == 0) {
					$imageName = $auther_pic['name'];
					if (file_exists($uploadPath . DS . $imageName)) {
						$imageName = date('His') . $imageName;
					}
					$full_image_path = $uploadPath . DS . $imageName;
					move_uploaded_file($auther_pic['tmp_name'], $full_image_path);
					$this->request->data['Testimonial']['auther_pic'] = $imageName;
				}

			} else {
				$Testimonial = $this->Testimonial->find('first', array('conditions' => array('Testimonial.id' => $id)));
				$this->request->data['Testimonial']['auther_pic'] = $Testimonial['Testimonial']['auther_pic'];
			}
			$this->Testimonial->id = $id;
			if ($this->Testimonial->save($this->request->data)) {
				$this->Session->setFlash('Testimonial is succesfully added !!!', 'default', array('class' => 'alert alert-success'), 'admin_testimonial');
				return $this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash('There is some error in saving your testimonial please try again !!!', 'default', array('class' => 'alert alert-danger'), 'admin_testimonial');
			}
		}
		$this->request->data = $this->Testimonial->read(null, $id);
		$Testimonial = $this->Testimonial->find('first', array('conditions' => array('Testimonial.id' => $id)));
		$this->set('Testimonial', $Testimonial);
	}

}