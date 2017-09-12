<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class HomeController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'search', 'aboutus', 'test', 'courseSamples', 'courseSamplevideo');
	}

//home page controller : 18/07/17
	public function index() {
		$this->loadModel('Samplevideo');
		$main_sample_video = $this->Samplevideo->find('first', array('conditions' => array('Samplevideo.main_video' => 1)));
		$get_extension = substr($main_sample_video['Samplevideo']['video_path'], strrpos($main_sample_video['Samplevideo']['video_path'], '.') + 1);
		$main_video_url = $this->webroot . 'videos/sample_videos/' . $main_sample_video['Samplevideo']['video_path'];
		//pr($main_video_url);die();
		$this->set('main_video', $main_video_url);
		$this->set('main_video_extension', $get_extension);
		$other_sample_video = $this->Samplevideo->find('all', array('conditions' => array('Samplevideo.main_video' => 0, 'Samplevideo.having_course' => 1)));
		$this->set('other_sample_video', $other_sample_video);

		//print_r($pintrest_link['Link']);die();
		//testimonail
		$this->loadModel('Testimonial');
		$Testimonail = $this->Testimonial->find('all');
		$this->set('Testimonail', $Testimonail);

	}
//About us
	public function aboutus() {
		$this->loadModel("Staticpage");
		$data = $this->Staticpage->find("first", array('conditions' => array('Staticpage.position' => "about")));
		$this->set(compact("data"));
	}
//sample videos index :22/07/17
	public function admin_samplevideos() {
		if (isset($this->request->data['Folder']['search'])) {
			$keyword = $this->request->data['Folder']['search'];
			//pr($keyword);die();
		} else {
			$keyword = '';
		}
		$this->loadModel('Samplevideo');
		$this->paginate = array(
			'limit' => 6,
			'recursive' => 0,
			'order' => array('main_video' => 'desc'),
			'conditions' => array(
				'OR' => array('video_name LIKE' => '%' . $keyword . '%'),
			),
		);
		$sample_video = $this->paginate('Samplevideo');

		$this->set('Samplevideo', $sample_video);
	}
//show static pages
	public function admin_showstaticpage() {
		$this->loadModel('Staticpage');
		$staticpages = $this->Staticpage->find("all");
		$this->set(compact("staticpages"));
	}
//view static pages
	public function admin_viewstaticpage($id = null) {
		$this->loadModel('Staticpage');
		$staticpage = $this->Staticpage->find('first', array('conditions' => array('id' => $id)));
		$this->set(compact("staticpage"));
	}
//delete static page
	public function admin_deletestaticpage($id = null) {
		$this->loadModel('Staticpage');
		$this->Staticpage->delete($id);
		return $this->redirect(array('action' => 'admin_showstaticpage'));
	}
//add static page
	public function admin_addstaticpage($id = null) {
		if ($this->request->is("post")) {
			print_r($this->request->data);
			exit();
		}
	}
//edit static page
	public function admin_editstaticpage($id = null) {
		$this->loadModel("Staticpage");
		if ($this->request->is(array("post", "put"))) {
			if ($this->request->data['Staticpage']['image']['name']) {
				$auther_pic = $this->request->data['Staticpage']['image'];
				$uploadFolder = "staticpage_pic";
				$uploadPath = WWW_ROOT . 'image/' . $uploadFolder;
				if ($auther_pic['error'] == 0) {
					$imageName = $auther_pic['name'];
					if (file_exists($uploadPath . DS . $imageName)) {
						$imageName = date('His') . $imageName;
					}
					$full_image_path = $uploadPath . DS . $imageName;
					move_uploaded_file($auther_pic['tmp_name'], $full_image_path);
					$this->request->data['Staticpage']['image'] = $imageName;
				}

			} else {
				$Staticpage = $this->Staticpage->find('first', array('conditions' => array('Staticpage.id' => $id)));
				$this->request->data['Staticpage']['image'] = $Staticpage['Staticpage']['image'];
			}
			$this->Staticpage->id = $id;
			if ($this->Staticpage->save($this->request->data)) {
				$this->Session->setFlash('Staticpage is succesfully added !!!', 'default', array('class' => 'alert alert-success'), 'admin_editstaticpage');
				return $this->redirect(array('action' => 'admin_showstaticpage'));
			} else {
				$this->Session->setFlash('There is some error in saving your staticpage please try again !!!', 'default', array('class' => 'alert alert-danger'), 'admin_editstaticpage');
			}
		} else {
			$staticpage = $this->Staticpage->find("first", array("conditions" => array('Staticpage.id' => $id)));
			$this->set('staticpic', $staticpage['Staticpage']['image']);
			$this->request->data = $staticpage;
		}
	}
//add sample videos
	//sample videos index :22/07/17
	public function admin_addsamplevidoes() {

		if ($this->request->is("post")) {
			$this->loadModel('Samplevideo');
			if ($this->request->data['Samplevideo']['main_video'] == 1) {

				$get_sample_video_if_main_vdo = $this->Samplevideo->find('first', array('conditions' => array('Samplevideo.main_video' => 1)));
				if ($get_sample_video_if_main_vdo) {
					$change_status = $this->Samplevideo->updateAll(array("Samplevideo.main_video" => "'" . 0 . "'"), array("Samplevideo.id" => $get_sample_video_if_main_vdo['Samplevideo']['id']));
				}
			}
			//
			if ($this->Samplevideo->hasAny(['video_name' => $this->request->data['Samplevideo']['video_name']])) {
				$this->Session->setFlash('Same name video alerdy in our record please change the name of video', 'default', array('class' => 'alert alert-danger'), 'admin_samplevideo');
			} else {
				$image = $this->request->data['Samplevideo']['video_image_name'];
				$uploadFolder = "video_images";
				$uploadPaths = WWW_ROOT . 'image/' . $uploadFolder;
				if ($image['error'] == 0) {
					$imageName = $image['name'];
					if (file_exists($uploadPaths . DS . $imageName)) {
						$imageName = date('His') . $imageName;
					}
					$full_image_path = $uploadPaths . DS . $imageName;
					move_uploaded_file($image['tmp_name'], $full_image_path);
					$this->request->data['Samplevideo']['video_image_name'] = $imageName;
				}
				//video file upload
				$video = $this->request->data['Samplevideo']['video_path'];
				$uploadFolder = "sample_videos";
				$uploadPath = WWW_ROOT . 'videos/' . $uploadFolder;
				if ($video['error'] == 0) {
					$videoName = $video['name'];
					if (file_exists($uploadPath . DS . $videoName)) {
						$videoName = date('His') . $videoName;
					}
					$full_video_path = $uploadPath . DS . $videoName;
					move_uploaded_file($video['tmp_name'], $full_video_path);
					$this->request->data['Samplevideo']['video_path'] = $videoName;
				}
				$this->request->data['Samplevideo']['uploaded_by'] = $this->Auth->user('id');
				if ($this->Samplevideo->save($this->request->data)) {
					$this->Session->setFlash('Sample video is succesfully added !!!', 'default', array('class' => 'alert alert-Success'), 'admin_samplevideo');
					return $this->redirect(array('action' => 'admin_samplevideos'));
				} else {
					$this->Session->setFlash('There is some error in saving your video please try again !!!', 'default', array('class' => 'alert alert-Success'), 'admin_samplevideo');
				}

			}
		}
	}
	//view sample video data
	public function admin_viewsamplevideos($id = null) {
		$this->loadModel('Samplevideo');
		$this->Samplevideo->id = $id;
		if (!$this->Samplevideo->exists()) {
			throw new NotFoundException('Invalid View id');
		}
		$get_data = $this->Samplevideo->find(
			'first', array(
				'recursive' => 1,
				'conditions' => array('Samplevideo.id' => $id),

			)
		);
		$this->set('samplevideo', $get_data);
		//pr($this->Samplevideo->read(null, $id));die();
	}

	//delete videos
	public function admin_deletesamplevideo($id = null) {

		$this->loadModel('Samplevideo');
		$this->Samplevideo->id = $id;
		if (!$this->Samplevideo->exists()) {
			throw new NotFoundException('Invalid Video id');
		}

		$data = $this->Samplevideo->find('first', array('conditions' => array('Samplevideo.id' => $id)));
		$f = $data['Samplevideo']['video_path'];

		$documents = $this->Samplevideo->delete();
		$file = unlink(WWW_ROOT . 'videos/sample_videos/' . $data['Samplevideo']['video_path']);

		if ($file) {
			$this->Samplevideo->delete();
			$this->Session->setFlash('Video Has been deleted successfully !!', 'default', array('class' => 'alert alert-success'), 'admin_samplevideo');
			return $this->redirect($this->referer());
		} else {
			$this->Session->setFlash('There is some error in deleting your file please try again', 'default', array('class' => 'alert alert-danger'), 'admin_samplevideo');
			return $this->redirect($this->referer());
		}
	}

	//edit sample sample video
	public function admin_editsamplevideo($id = null) {
		$this->loadModel('Samplevideo');
		$this->Samplevideo->id = $id;
		if (!$this->Samplevideo->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$sample_video = $this->Samplevideo->find('first', array('conditions' => array('Samplevideo.id' => $id)));
			//pr($sample_video['Samplevideo']['video_path']);die('here');
			$get_same_name_file = $this->Samplevideo->find('first',
				array(
					'conditions' => array(
						'Samplevideo.id !=' => $id,
						'Samplevideo.video_name' => $this->request->data['Samplevideo']['video_name']))
			);

			if ($this->request->data['Samplevideo']['main_video'] == 1) {

				$get_sample_video_if_main_vdo = $this->Samplevideo->find('first', array('conditions' => array('Samplevideo.main_video' => 1)));
				if ($get_sample_video_if_main_vdo) {
					$change_status = $this->Samplevideo->updateAll(array("Samplevideo.main_video" => "'" . 0 . "'"), array("Samplevideo.id" => $get_sample_video_if_main_vdo['Samplevideo']['id']));
				}
			}

			if ($get_same_name_file) {
				$this->Session->setFlash('File exit with same name please change file name', 'default', array('class' => 'alert alert-danger'), 'admin_editsamplevideo');

				return $this->redirect($this->referer());
			}
			if ($this->request->data['Samplevideo']['video_path']['name'] == '') {

				$this->request->data['Samplevideo']['video_path'] = $sample_video['Samplevideo']['video_path'];
			} else {
				$video = $this->request->data['Samplevideo']['video_path'];
				$uploadFolder = "sample_videos";
				$uploadPath = WWW_ROOT . 'videos/' . $uploadFolder;
				$videoName = $video['name'];
				if (file_exists($uploadPath . DS . $videoName)) {
					$videoName = date('His') . $videoName;
				}
				$full_video_path = $uploadPath . DS . $videoName;
				move_uploaded_file($video['tmp_name'], $full_video_path);
				$this->request->data['Samplevideo']['video_path'] = $videoName;

			}
			if ($this->request->data['Samplevideo']['video_image_name']['name'] == '') {
				$this->request->data['Samplevideo']['video_image_name'] = $sample_video['Samplevideo']['video_image_name'];
			} else {
				$image = $this->request->data['Samplevideo']['video_image_name'];
				$uploadFolder = "video_images";
				$uploadPaths = WWW_ROOT . 'image/' . $uploadFolder;

				$imageName = $image['name'];
				if (file_exists($uploadPaths . DS . $imageName)) {
					$imageName = date('His') . $imageName;
				}
				$full_image_path = $uploadPaths . DS . $imageName;
				move_uploaded_file($image['tmp_name'], $full_image_path);
				$this->request->data['Samplevideo']['video_image_name'] = $imageName;
			}
			//$this->request->data = $this->Samplevideo->read(null, $id);
			//pr($this->request->data);die();

			if ($this->Samplevideo->save($this->request->data)) {
				$Samplevideo = $this->Samplevideo->find('first', array('conditions' => array('Samplevideo.id' => $id)));
				$this->set('Samplevideo', $Samplevideo);
				$this->Session->setFlash('Video  Updated successfully', 'default', array('class' => 'alert alert-success'), 'admin_editsamplevideo');
				return $this->redirect(array('action' => 'admin_samplevideos'));

			}
		} else {
			$this->request->data = $this->Samplevideo->read(null, $id);
			$Samplevideo = $this->Samplevideo->find('first', array('conditions' => array('Samplevideo.id' => $id)));
			$this->set('Samplevideo', $Samplevideo);
		}
	}
//show sample courses on coursesample page
	public function courseSamples() {
		$this->loadModel('Samplevideo');
		// $Samplevideo = $this->Samplevideo->find('all', array(
		// 	'conditions' => array('Samplevideo.status' => 1),
		// ));

		$this->paginate = array(
			'limit' => 6,
			'recursive' => 0,
			'order' => array('main_video' => 'desc'),
			'conditions' => array('Samplevideo.status' => 1, 'Samplevideo.having_course' => 1),
		);
		$sample_video = $this->paginate('Samplevideo');
		$this->set('samplevideo', $sample_video);
	}

//show sample courses on coursesample page
	public function courseSamplevideo($id = null) {
		// $this->loadModel('Samplevideo');
		// $Samplevideo = $this->Samplevideo->find('first', array(
		// 	'conditions' => array('Samplevideo.id' => $id, 'Samplevideo.status' => 1),
		// ));
		// $this->set('samplevideo', $Samplevideo);
		// pr($id);

		$this->loadModel('Course');
		$Course = $this->Course->find('first', array(
			'recursive' => 2,
			'conditions' => array('Course.sample_video_id' => $id),
		));
		if (empty($Course)) {
			pr('There is no course yet for sample video');die();
		}
		//pr($Course);die();
		$numCourse = sizeof($Course['Chapter']);

		$this->set('numCourse', $numCourse);

		$getprofessor_data = $Course['Course']['professor_name'];
		$this->loadModel('Professor');
		$Professor = $this->Professor->find('first', array(
			'conditions' => array('Professor.professor_name' => $getprofessor_data),
		));
		$this->set('Course', $Course);
		$this->set('Professor', $Professor);
		//pr($Professor);die();

	}

	//sample text page
	public function test() {
		// $a = 0;
		// ++$a;
		// echo $a;die();
	}
	//search page function : 08/04/17
	public function search() {

		if (!empty($this->request->data)) {
			$this->loadModel("Samplevideo");
			$this->loadModel("Course");
			$search = $this->request->data['server'];
			$course = $this->Course->find("all", array('conditions' => array('Course.course_name LIKE' => "%" . $search . "%")));
			if (!empty($course)) {
				foreach ($course as $key => $value) {
					$course_sample[] = $value['Course']['sample_video_id'];
				}
				if (!empty($course_sample)) {
					$other_sample_video = $this->Samplevideo->find('all', array('conditions' => array('Samplevideo.id' => $course_sample)));
					echo json_encode($other_sample_video);
					exit();
				} else {
					$other_sample_video = array();
					echo json_encode($other_sample_video);
					exit();
				}
			} else {
				$other_sample_video = array();
				echo json_encode($other_sample_video);
				exit();
			}
		}
	}

}