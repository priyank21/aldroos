<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class CoursesController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('accessCourse');
	}
	//showing all users on admin_index
	public function admin_index() {

		if (isset($this->request->data['Course']['search'])) {
			$keyword = $this->request->data['Course']['search'];

		} else {
			$keyword = '';
		}
		$this->paginate = array(
			'limit' => 6,
			'recursive' => 2,
			'order' => array('id' => 'desc'),
			'conditions' => array(
				'OR' => array('course_name LIKE' => '%' . $keyword . '%'),
			),
		);
		$Course = $this->paginate('Course');

		$this->set('Course', $Course);
	}

//Add courses
	public function admin_addcourse() {
		$this->loadModel('Samplevideo');
		$allSamplevideo = $this->Samplevideo->find('all',
			array(
				'conditions' => array(
					'Samplevideo.having_course' => 0))
		);
		$this->set('allSamplevideo', $allSamplevideo);
		//get all professor
		$this->loadModel('Professor');
		$allProfessors = $this->Professor->find('list', array(        
			'fields' => array('Professor.professor_name'),
			'keyField' => array('Professor.professor_name'),
			 'recursive' => 0    ));
		foreach ($allProfessors as $key => $value) {

  			$offerArray[$value] = $value;
		}
		$offerArray[''] = 'Please select value';
		$this->set('allProfessors', array_reverse($offerArray));
		// echo '<pre>';
		// print_r(array_reverse($offerArray));die();
		if ($this->request->is("post")) {
			//print_r($this->request->data);die();
			if ($this->Course->hasAny(['course_name' => $this->request->data['Course']['course_name']])) {
				$this->Session->setFlash('Same name course alerdy in our record please chenge the name of course', 'default', array('class' => 'alert alert-danger'), 'admin_course');
				$this->request->referer();
			} else {

				if ($this->Course->save($this->request->data)) {
					// pr($this->Course->getLastInsertID());die();
					$course_name = $this->request->data['Course']['course_name'];
					$this->Samplevideo->updateAll(array(
						'Samplevideo.having_course' => 1,
						'Samplevideo.video_name' => "'" . $course_name . "'",
						'Samplevideo.asingtocourse' => $this->Course->getLastInsertID()),
						array('Samplevideo.id' => $this->request->data['Course']['sample_video_id']));

					$this->Session->setFlash('Course is succesfully added !!!', 'default', array('class' => 'alert alert-success'), 'admin_course');
					return $this->redirect(array('action' => 'admin_index'));
				} else {
					$this->Session->setFlash('There is some error in saving your Course please try again !!!', 'default', array('class' => 'alert alert-Success'), 'admin_course');
				}
			}
			//pr($this->request->data);die();
			//pr($this->request->data);die();
		}

	}

	//delete course
	public function admin_deletecourse($id = null) {
		Configure::write('debug', 2);
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Course->id = $id;
		$get_same_name_file = $this->Course->find('first',
			array(
				'conditions' => array(
					'Course.id =' => $id))
		);
		//pr($get_same_name_file['Course']['sample_video_id']);die();

		if (!$this->Course->exists()) {
			throw new NotFoundException('Invalid user');
		} else {
			$this->loadModel('Samplevideo');

			$this->Samplevideo->updateAll(array(
				'Samplevideo.having_course' => 0),
				array('Samplevideo.id' => $get_same_name_file['Course']['sample_video_id']));

			if ($this->Course->delete()) {
				$this->Session->setFlash('Course deleted successfully !!!', 'default', array('class' => 'alert alert-success'), 'admin_course');
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('Course was not deleted please try again later !!', 'default', array('class' => 'alert alert-danger'), 'admin_course');
			return $this->redirect(array('action' => 'index'));
		}
	}
//
	//edt course
	public function admin_editcourse($id = null) {
		Configure::write('debug', 0);
		if ($this->request->is('post') || $this->request->is('put')) {
			//pr($this->request->data);die('fhgf');
			$get_same_name_file = $this->Course->find('first',
				array(
					'conditions' => array(
						'Course.id !=' => $id,
						'Course.course_name' => $this->request->data['Course']['course_name']))
			);

			if ($get_same_name_file) {
				$this->Session->setFlash('Course having same name already in our record !!', 'default', array('class' => 'alert alert-success'), 'admin_course');
			} else {
				$this->Course->id = $id;
				if ($this->Course->save($this->request->data)) {
					$course_name = $this->request->data['Course']['course_name'];
					$this->loadModel('Samplevideo');
					$this->Samplevideo->updateAll(array(
						'Samplevideo.having_course' => 1,
						'Samplevideo.video_name' => "'" . $course_name . "'",
						'Samplevideo.asingtocourse' => $id),
						array('Samplevideo.id' => $this->request->data['Course']['sample_video_id']));

					$this->Session->setFlash('Video have been updated successfully !!', 'default', array('class' => 'alert alert-success'), 'admin_course');
					return $this->redirect(array('action' => 'index'));
				}
			}
		} else {
			$this->request->data = $this->Course->read(null, $id);
			$Course = $this->Course->find('first', array('conditions' => array('Course.id' => $id)));
			$this->set('Course', $Course);
			$this->loadModel('Professor');
				$allProfessors = $this->Professor->find('list', array(        
					'fields' => array('Professor.professor_name'),
					'keyField' => array('Professor.professor_name'),
			 		'recursive' => 0    ));
				foreach ($allProfessors as $key => $value) {

  					$offerArray[$value] = $value;
				}
				$offerArray[''] = 'Please select value';
				$this->set('allProfessors', array_reverse($offerArray));
			//print_r($Course);die();
			$this->loadModel('Samplevideo');

			$allSamplevideo = $this->Samplevideo->find('all',
				array(
					'conditions' => array(
						'Samplevideo.having_course' => 0))
			);

			$this->set('allSamplevideo', $allSamplevideo);

		}

	}
	//view course
	public function admin_viewcourse($id = null) {

		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException('Invalid View id');
		}
		$get_data = $this->Course->find(
			'first', array(
				'recursive' => 1,
				'conditions' => array('Course.id' => $id),

			)
		);
		$this->set('Course_data_array', $get_data);
	}
	//add chapter
	public function admin_addchapter($id = null) {
		$this->loadModel('Chapter');
		$this->Course->id = $id;
		$get_course_data = $this->Course->find(
			'first', array(
				'recursive' => 1,
				'conditions' => array('Course.id' => $id),
			)
		);
		$this->set('Course_data_array_inside_course', $get_course_data);
		if ($this->request->is('post') || $this->request->is('put')) {
			//pr($this->request->data);die();
			$this->loadModel('Chapter');
			$get_same_chapter_name = $this->Chapter->find('first',
				array(
					'conditions' => array(
						'Chapter.course_id' => $id,
						'Chapter.chapter_name' => $this->request->data['Chapter']['chapter_name']))
			);
			if ($get_same_chapter_name) {
				$this->Session->setFlash('Chapter having same name already Exits !!', 'default', array('class' => 'alert alert-danger'), 'admin_chapter');

				return $this->redirect(array('action' => 'addchapter', $id));
			} else {
				//video file upload
				$video = $this->request->data['Chapter']['video_name'];
				$uploadFolder = "chapter_videos";
				$uploadPath = WWW_ROOT . 'videos/' . $uploadFolder;
				if ($video['error'] == 0) {
					$videoName = $video['name'];
					if (file_exists($uploadPath . DS . $videoName)) {
						$videoName = date('His') . $videoName;
					}
					$full_video_path = $uploadPath . DS . $videoName;
					move_uploaded_file($video['tmp_name'], $full_video_path);
					$this->request->data['Chapter']['video_name'] = $videoName;
					$this->request->data['Chapter']['course_id'] = $id;
					$this->request->data['Chapter']['course_name'] = $get_course_data['Course']['course_name'];
				}
				$this->Chapter->create();
				if ($this->Chapter->save($this->request->data)) {
					$this->Session->setFlash('Chapter is succesfully added !!!', 'default', array('class' => 'alert alert-success'), 'admin_chapter');
					return $this->redirect(array('action' => 'chapters', $id));
				} else {
					$this->Session->setFlash('There is some error in adding your chapter please try again !!!', 'default', array('class' => 'alert alert-danger'), 'admin_chapter');
				}
			}
		}
	}

	// chapters
	public function admin_chapters($id = null) {
		$this->loadModel('Chapter');
		if (isset($this->request->data['Chapter']['search'])) {
			$keyword = $this->request->data['Chapter']['search'];
			//pr($keyword);die();
		} else {
			$keyword = '';
		}
		$this->paginate = array(
			'limit' => 6,
			'recursive' => 2,
			'order' => array('id' => 'desc'),
			'conditions' => array(
				'OR' => array('chapter_name LIKE' => '%' . $keyword . '%'),
				'AND' => array('course_id' => $id),
			),
		);
		$Chapter = $this->paginate('Chapter');

		$this->set('Chapters', $Chapter);
		$this->Course->id = $id;
		$get_course_data = $this->Course->find(
			'first', array(
				'recursive' => 1,
				'conditions' => array('Course.id' => $id),
			)
		);
		$this->set('Course_data_array_inside_course', $get_course_data);
		//return $this->redirect(array('action' => 'chapters', $id));
	}

	//view chapters
	public function admin_viewchapter($id = null) {
		$this->loadModel('Chapter');
		$this->Chapter->id = $id;
		if (!$this->Chapter->exists()) {
			throw new NotFoundException('Invalid View id');
		}
		$get_data_chapter = $this->Chapter->find(
			'first', array(
				'recursive' => 1,
				'conditions' => array('Chapter.id' => $id),

			)
		);
		$this->set('Chapter_data_array', $get_data_chapter);
	}

	//delete chapters
	public function admin_deletechapter($id = null) {
		$this->loadModel('Chapter');
		$get_data_chapter = $this->Chapter->find(
			'first', array(
				'recursive' => 1,
				'conditions' => array('Chapter.id' => $id),

			)
		);
		$course_id = $get_data_chapter['Chapter']['course_id'];
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Chapter->id = $id;
		if (!$this->Chapter->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->Chapter->delete()) {
			$this->Session->setFlash('Chapter deleted successfully !!!', 'default', array('class' => 'alert alert-success'), 'admin_chapter');
			return $this->redirect(array('action' => 'chapters', $course_id));
		} else {

			$this->Session->setFlash('Chapter was not deleted please try again later !!', 'default', array('class' => 'alert alert-danger'), 'admin_chapter');
			return $this->redirect(array('action' => 'chapters', $course_id));
		}
	}

//edit chapter

	public function admin_editchapter($id = null) {

		if ($this->request->is('post') || $this->request->is('put')) {

			$this->loadModel('Chapter');
			$this->Chapter->id = $id;
			$get_data_chapter = $this->Chapter->find(
				'first', array(
					'recursive' => 1,
					'conditions' => array('Chapter.id' => $id),

				)
			);
			$get_course_id = $get_data_chapter['Chapter']['course_id'];
			if ($this->request->data['Chapter']['video_name']['name'] == '') {

				$this->request->data['Chapter']['video_name'] = $get_data_chapter['Chapter']['video_name'];
			} else {
				//pr($this->request->data);die();
				$video = $this->request->data['Chapter']['video_name'];
				$uploadFolder = "chapter_videos";
				$uploadPath = WWW_ROOT . 'videos/' . $uploadFolder;
				if ($video['error'] == 0) {
					$videoName = $video['name'];
					if (file_exists($uploadPath . DS . $videoName)) {
						$videoName = date('His') . $videoName;
					}
					$full_video_path = $uploadPath . DS . $videoName;
					move_uploaded_file($video['tmp_name'], $full_video_path);
					$this->request->data['Chapter']['video_name'] = $videoName;

				}

			}
			if ($this->Chapter->save($this->request->data)) {
				$this->Session->setFlash('Chapter is succesfully Updated !!!', 'default', array('class' => 'alert alert-success'), 'admin_chapter');
				return $this->redirect(array('action' => 'chapters', $get_course_id));
			} else {
				$this->Session->setFlash('There is some error in Updating your chapter please try again !!!', 'default', array('class' => 'alert alert-danger'), 'admin_chapter');
			}
		} else {
			$this->loadModel('Chapter');

			$this->request->data = $this->Chapter->read(null, $id);
			$Chapter = $this->Chapter->find('first', array('conditions' => array('Chapter.id' => $id)));
			$this->set('Chapter', $Chapter);
		}
	}
	///add topic
	public function admin_addTopic($id = null) {
		$this->loadModel('Chapter');
		$Chapter = $this->Chapter->find('first', array('conditions' => array('Chapter.id' => $id)));
		$this->set('Chapter', $Chapter);
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->loadModel('Topic');
			$this->request->data['Topic']['chapter_id'] = $Chapter['Chapter']['id'];
			$this->request->data['Topic']['chapter_name'] = $Chapter['Chapter']['chapter_name'];
			$this->request->data['Topic']['course_id'] = $Chapter['Chapter']['course_id'];
			$this->request->data['Topic']['course_name'] = $Chapter['Chapter']['course_name'];
			$array = $this->request->data;
			//pr($array);
			foreach ($array['Topic']['topic_name'] as $key => $value) {
				$this->request->data['Topic']['topic_name'] = $array['Topic']['topic_name'][$key];
				$this->request->data['Topic']['topic_timing'] = $array['Topic']['topic_timing'][$key];

				$this->Topic->create();
				$this->Topic->save($this->request->data);
			}
			if ($this->Topic->save($this->request->data)) {
				$this->Session->setFlash('Topic  and there timings are  succesfully added !!!', 'default', array('class' => 'alert alert-success'), 'admin_topic');
				return $this->redirect(array('action' => 'admin_viewTopic', $id));
			} else {
				$this->Session->setFlash('Topic  and there timings are  succesfully added !!!', 'default', array('class' => 'alert alert-success'), 'admin_topic');
			}
			//pr($array);die();
		}
	}

	//view all topics
	public function admin_viewTopic($id = null) {
		$this->loadModel('Topic');
		$this->paginate = array(
			'limit' => 6,
			'order' => array('id' => 'desc'),
			'conditions' => array('chapter_id' => $id),
		);
		$Topicview = $this->paginate('Topic');
		// pr($Topicview);die();
		// $this->loadModel('Topic');
		// $Topic = $this->Topic->find('all', array('conditions' => array('Topic.chapter_id' => $id)));
		$this->set('Topicview', $Topicview);
		$this->loadModel('Chapter');
		$Chapter = $this->Chapter->find('first', array('conditions' => array('Chapter.id' => $id)));
		$this->set('Chapter', $Chapter);

	}

	//delete topic
	public function admin_deleteTopic($id = null) {
		$this->loadModel('Topic');
		$chapter_id = $this->Topic->find('first', array('conditions' => array('Topic.id' => $id)));
		//pr($chapter_id['Topic']['chapter_id']);die();
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Topic->id = $id;
		if (!$this->Topic->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->Topic->delete()) {
			$this->Session->setFlash('Topic and its timing is successfully deleted  !!!', 'default', array('class' => 'alert alert-success'), 'admin_topic');
			return $this->redirect(array('action' => 'admin_viewTopic', $chapter_id['Topic']['chapter_id']));
		} else {

			$this->Session->setFlash('Topic is not deleted due to some internal error !!', 'default', array('class' => 'alert alert-danger'), 'admin_topic');
			return $this->redirect(array('action' => 'admin_viewTopic', $chapter_id['Topic']['chapter_id']));
		}

	}

	//edit topic data
	public function admin_editTopic($id = null) {
		$this->loadModel('Topic');
		$Topic = $this->Topic->find('all', array('conditions' => array('Topic.chapter_id' => $id)));
		$this->set('Topic', $Topic);
		$this->loadModel('Chapter');
		$Chapter = $this->Chapter->find('first', array('conditions' => array('Chapter.id' => $id)));
		$this->set('Chapter', $Chapter);
		if ($this->request->is('post') || $this->request->is('put')) {
			$array = $this->request->data;

			foreach ($Topic as $key => $value) {
				$this->Topic->id = $value['Topic']['id'];
				$this->request->data['Topic']['topic_name'] = $array['Topic']['topic_name'][$key];
				$this->request->data['Topic']['topic_timing'] = $array['Topic']['topic_timing'][$key];
				$updated_data = $this->Topic->save($this->request->data);

			}
			if (isset($this->request->data['Topic']['topic_names'])) {
				// pr($array);die('here');

				foreach ($this->request->data['Topic']['topic_names'] as $key => $value) {
					$this->request->data['Topic']['chapter_id'] = $Chapter['Chapter']['id'];
					$this->request->data['Topic']['chapter_name'] = $Chapter['Chapter']['chapter_name'];
					$this->request->data['Topic']['course_id'] = $Chapter['Chapter']['course_id'];
					$this->request->data['Topic']['course_name'] = $Chapter['Chapter']['course_name'];
					$this->request->data['Topic']['topic_name'] = $array['Topic']['topic_names'][$key];
					$this->request->data['Topic']['topic_timing'] = $array['Topic']['topic_timings'][$key];
					unset($this->request->data['Topic']['topic_names']);
					unset($this->request->data['Topic']['topic_timings']);
					$this->Topic->create();
					$inserted_new_data = $this->Topic->save($this->request->data);
				}
				// die();

			}
			if (isset($inserted_new_data) || isset($updated_data)) {
				$this->Session->setFlash('Topic and its timing is successfully updated  !!!', 'default', array('class' => 'alert alert-success'), 'admin_topic');
				return $this->redirect(array('action' => 'admin_viewTopic', $id));
			} else {
				$this->Session->setFlash('Topic and its timing is not updated please try again after some time !!!', 'default', array('class' => 'alert alert-success'), 'admin_topic');
				return $this->redirect(array('action' => 'admin_viewTopic', $id));
			}

		}

	}
	//edit topic data
	public function accessCourse($id = null) {
		if ($this->Auth->user()) {
			$uid = $this->Auth->User('id');
			$this->loadModel('User');
			$get_login_user_data = $this->User->find('first', array('conditions' => array('User.id' => $uid)));
			// print_r($get_login_user_data['User']['login_count_in subscription_period']);die();
			if ($get_login_user_data['User']['subscription_status'] == 1) {
				if ($get_login_user_data['User']['login_count_in subscription_period'] <= 100) {
					$this->loadModel('Chapter');
					$Chapter = $this->Chapter->find('first', array(
						'recursive' => 2,
						'conditions' => array('Chapter.id' => $id),
					));
					$this->set('Chapter', $Chapter);
					//pr($Chapter);die();
					//echo "is between";
				} else {
					$msg = 'Your subscription is expired please purchase new one to continue'; //sub expired
					//echo "subexpired!";die();
					$this->Session->write('msg', $msg);
					return $this->redirect(array('controller' => 'users', 'action' => 'subscriptionpage'));
				}
			} else {
				$msg = 'You do not have subscription to access the course please purchase one to access';
				//echo 'no subscription';die();
				$this->Session->write('msg', $msg);
				return $this->redirect(array('controller' => 'users', 'action' => 'subscriptionpage'));
			}

		} else {
			return $this->redirect(array('controller' => 'users', 'action' => 'loginuser'));
			//pr('user is  not login');die();
		}
		//die();
	}

}