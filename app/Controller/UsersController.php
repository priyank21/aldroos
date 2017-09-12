<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('admin_login', 'signup', 'loginuser', 'forgetpwd', 'reset', 'paypalresponse', 'subscriptionpage', 'contactus', 'CheckSubscription');
	}
//showing all users on admin_index
	public function admin_index() {

		if (isset($this->request->data['User']['search'])) {
			$keyword = $this->request->data['User']['search'];
			//pr($keyword);die();
		} else {
			$keyword = '';
		}
		$this->paginate = array(
			'limit' => 6,
			'recursive' => 2,
			'order' => array('id' => 'desc'),
			'conditions' => array(
				'OR' => array('first_name LIKE' => '%' . $keyword . '%'),
			),
		);
		$users = $this->paginate('User');

		$this->set('users', $users);

	}
//login function for admin
	public function admin_login() {
		//print_r('hello');die();
		//Configure::write("debug", 0);
		$this->layout = "admin";
		if ($this->request->is('post')) {
			// echo "<pre>";
			//pr($this->request->data);die('dfhfdhfg');
			if ($this->Auth->login()) {
				$this->User->id = $this->Auth->user('id');
				if ($this->Auth->user('role') == 'admin') {
					//echo 'here';
					return $this->redirect('/admin/dashboards/index');
				} else {
					$this->Session->setFlash('Login is incorrect', 'default', array('class' => 'alert alert-danger'), 'admin_login');
				}
			} else {
				$this->Session->setFlash('Login is incorrect', 'default', array('class' => 'alert alert-danger'), 'admin_login');
			}
		}
	}
//adding new user by admin
	public function admin_add() {
		Configure::write("debug", 2);
		if ($this->request->is("post")) {

			if ($this->User->hasAny(array('User.email' => $this->request->data['User']['email']))) {
				//die('here_1');

				$this->Session->setFlash('Username already exist!!!', 'default', array('class' => 'alert alert-danger'), 'admin_add');
				return $this->redirect(array('action' => 'add'));
			} elseif (strlen($this->request->data['User']['phone']) > 15) {
				$this->Session->setFlash('Phone number should not have more then 15 character!!!', 'default', array('class' => 'alert alert-danger'), 'admin_add');

				return $this->redirect(array('action' => 'add'));
			} elseif ($this->request->data['User']['password'] != $this->request->data['User']['conpwd']) {
				$this->Session->setFlash('Password does not match!!!', 'default', array('class' => 'alert alert-danger'), 'admin_add');

				return $this->redirect(array('action' => 'add'));
			} elseif ($this->User->hasAny(array('User.phone' => $this->request->data['User']['phone']))) {
				$this->Session->setFlash('Phone number already exists!!!', 'default', array('class' => 'alert alert-danger'), 'admin_add');

				return $this->redirect(array('action' => 'add'));
			}
			$this->request->data['User']['username'] = $this->request->data['User']['email'];
			$this->request->data['User']['first_name'] = $this->request->data['User']['name'];
			$this->request->data['User']['last_name'] = $this->request->data['User']['name'];
			$this->request->data['User']['login_name'] = $this->request->data['User']['name'];
			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['conpwd']);
			$this->request->data['User']['role'] = 'customer';
			// pr($this->request->data);die('dfhfdhfg');
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved', 'default', array('class' => 'alert alert-success'), 'admin_add');
				return $this->redirect(array('controller' => 'users', 'action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'), 'admin_add');
			}

		}
	}

//edit user in admin panel
	public function admin_edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user have been updated', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'default', array('class' => 'alert alert-danger'), 'admin_add');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}

	}

//view user info
	public function admin_view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		$this->set('user', $this->User->read(null, $id));
	}
//change password
	public function admin_password($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);

			// AuthComponent::password($this->request->data['User']['conpwd']);
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', array('class' => 'alert alert-danger'), 'admin_pass');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	}

//delete user
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		if ($this->User->delete()) {
			$this->Session->setFlash('User deleted', 'default', array('class' => 'alert alert-success'), 'admin_add');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('User was not deleted', 'default', array('class' => 'alert alert-danger'), 'admin_add');
		return $this->redirect(array('action' => 'index'));
	}
	//sign up website
	public function signup() {
		if ($this->Auth->login()) {
			return $this->redirect(array('action' => 'myaccount'));
		}
		if ($this->request->is("post")) {

			// $response['isSucess'] = 'false';

			// echo '<pre>';
			// print_r($this->request->data['email']);die();
			if ($this->User->hasAny(array('User.email' => $this->request->data['email']))) {
				echo 0;
				exit;
			} elseif ($this->User->hasAny(array('User.phone' => $this->request->data['phone']))) {
				echo 1;
				exit;
			} elseif ($this->User->hasAny(array('User.login_name' => $this->request->data['login_name']))) {
				echo 2;
				exit;
			}
			$this->request->data['User']['username'] = $this->request->data['email'];
			$this->request->data['User']['first_name'] = $this->request->data['firstname'];
			$this->request->data['User']['last_name'] = $this->request->data['last_name'];
			$this->request->data['User']['phone'] = $this->request->data['phone'];
			$this->request->data['User']['email'] = $this->request->data['email'];
			//$this->request->data['User']['status'] = 0;
			$this->request->data['User']['login_name'] = $this->request->data['login_name'];
			$this->request->data['User']['login_name'] = $this->request->data['login_name'];
			$this->request->data['User']['new_registration'] = 1;
			$this->request->data['User']['password'] = AuthComponent::password($this->request->data['confirm_pass']);
			$this->request->data['User']['role'] = 'customer';
			//echo '<pre>'; print_r($this->request->data); echo '</pre>'; die;
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->request->data['User']['username'] = $this->request->data['email'];
				$this->request->data['User']['password'] = $this->request->data['confirm_pass'];
				$this->Auth->login();
				$this->Session->write('session_user_id', $this->User->getLastInsertID());
				echo $this->User->getLastInsertID() . 'success';
				// echo 3;
				exit;
			} else {
				echo 4;
				exit;
			}

		} else {
			$this->loadModel('Subscription');
			$get_subscription_data = $this->Subscription->find('all');
			$this->set('subscription_data', $get_subscription_data);

		}
	}
	public function loginuser() {
		Configure::write("debug", 0);
		//print_r($this->request->data);die();
		if ($this->request->is('post')) {
			$this->request->data['User']['username'] = $this->request->data['username'];
			$this->request->data['User']['password'] = $this->request->data['password'];
			if ($this->Auth->login()) {
				$this->User->id = $this->Auth->user('id');
				if ($this->Auth->user('status') == 1) {
					if ($this->Auth->user('role') == 'admin') {
						//echo 'here';
						echo 0; //admin panel redirect
						exit;
					} else {
						$get_user_login_count_in_subscription = $this->User->find('first', array('conditions' => array('id' => $this->Auth->user('id'))));
						if ($get_user_login_count_in_subscription['User']['subscription_status'] == 1) {

							$login_count = ++$get_user_login_count_in_subscription['User']['login_count_in subscription_period'];
							$this->User->id = $this->Auth->user('id');
							$new = $this->User->save(array(
								'User' => array(
									'login_count_in subscription_period' => $login_count,
								),
							)
							);
						}

						echo 1; // website redirect
						exit;
					}
				} else {
					echo 4;
					exit;
				}

			} else {
				echo 3;
				exit;
			}
		}

	}
	///user logout function
	public function logout() {

		$this->Auth->logout();
		$this->redirect('/');
	}
	public function admin_logout() {
		$this->Auth->logout();
		$this->redirect('/');
	}
//forget password
	public function forgetpwd() {
		Configure::write("debug", 2);
		if ($this->request->is('post')) {

			if (filter_var($this->request->data['username'], FILTER_VALIDATE_EMAIL)) {
				// echo '<pre>';
				// print_r($this->request->data['username']);die('if');
				if ($this->User->hasAny(array('username' => $this->request->data['username']))) {
					$get_email_id = $this->User->find('first', array('conditions' => array('username' => $this->request->data['username'])));
					$user_email_id = $this->request->data['username'];
					$status = $get_email_id['User']['status'];
					// echo '<pre>';
					// print_r($get_email_id);die('if');
				} else {
					echo 0;
					exit;
				}
			} else {
				$get_email_id = $this->User->find('first', array('conditions' => array('login_name' => $this->request->data['username'])));
				if (!empty($get_email_id)) {
					$user_email_id = $get_email_id['User']['email'];
					$status = $get_email_id['User']['status'];
				} else {
					echo 1;
					exit;
				}
				// echo '<pre>';
				// print_r($get_email_id);die('else');
			}
			//sending email to user
			if ($status == 1) {
				$key = Security::hash(CakeText::uuid(), 'sha512', true);
				$hash = sha1($user_email_id . rand(0, 100));
				$url = Router::url(array('controller' => 'Users', 'action' => 'reset'), true) . '/' . $key . '#' . $hash;
				$hash_val = $key . '#' . $hash;
				$ms = '<p>Click the Link below to reset your password.</p><br /><a href="' . $url . '">' . '<button type="button" style="background:none; border:none; height:35px; padding:0px; display:inline-block; padding:0px 15px; background-color:#CC0000; color:#fff;" border-radius:4px;>Reset Password</button></a>';
				$get_email_id['User']['tokenhash'] = $key;
				$this->User->id = $get_email_id['User']['id'];
				if ($this->User->saveField('tokenhash', $hash_val)) {
					$l = new CakeEmail();
					$l->emailFormat('html')->template('forgot')->subject('Reset Your Password')
						->viewVars(array('link' => $url))
						->viewVars(array('user' => $get_email_id))
						->to($get_email_id['User']['email'])->send();
					$this->set('smtp_errors', "none");
					echo 2; //msg code if email sent
					exit;

				} else {
					echo 3; //msg code if error in genrating reset link
					exit;
				}
			} else {
				echo 4; //msg code if user is not active
				exit;
			}
		}
	}
//rest password
	public function reset() {
		///configure::write('debug', 2);
		if ($this->request->is('post')) {

			$hash = $this->request->data['hash_data'];
			$new_password = $this->request->data['confirm_new_pass'];
			$chech_hash = $this->User->findBytokenhash($hash);
			if ($chech_hash) {
				$this->User->id['User']['id'] = $chech_hash['User']['id'];
				$this->User->data['User']['email'] = $chech_hash['User']['email'];
				$this->User->data['User']['tokenhash'] = sha1($chech_hash['User']['email'] . rand(0, 100));
				$this->User->data['User']['password'] = AuthComponent::password($new_password);
				//print_r($this->request->data['User']['password']);die();
				if ($this->User->save($this->User->data)) {
					echo 1;
					exit();
				} else {
					echo 2;
					exit();
				}
			} else {
				echo 0;
				exit();
			}

		}
	}
//myacount controller
	public function myaccount() {
		if ($this->Auth->login()) {
			$this->User->recursive = 2;
			$get_current_user_data = $this->User->find('first', array('conditions' => array('id' => $this->Auth->user('id'))));
			$this->set("profile_pic", $get_current_user_data['User']['profile_pic']);
			$this->set("last_name", $get_current_user_data['User']['last_name']);
			$this->set("first_name", $get_current_user_data['User']['first_name']);
			$this->set("email", $get_current_user_data['User']['email']);
			$this->set("city", $get_current_user_data['User']['city']);
			$this->set("elementary_school", $get_current_user_data['User']['elementary_school']);
			$this->set("high_school", $get_current_user_data['User']['high_school']);
			$this->set("college_or_university", $get_current_user_data['User']['college_or_university']);
			$this->set("about_me", $get_current_user_data['User']['about_me']);
			$this->set("user_data", $get_current_user_data);
		}
	}
//profile pic update
	public function profilepic() {

		configure::write('debug', 2);
		if ($_FILES) {
			$uploadFolder = "profile_pic";
			$uploadPath = WWW_ROOT . 'image/' . $uploadFolder;
			if ($_FILES['files']['name']['0'] != '') {
				$imageName = $_FILES['files']['name']['0'];
				if (file_exists($uploadPath . DS . $imageName)) {
					$imageName = date('His') . $imageName;
				}
				$full_image_path = $uploadPath . DS . $imageName;
				move_uploaded_file($_FILES['files']['tmp_name']['0'], $full_image_path);
				$userId = $this->Auth->user('id');
				$save_image = $this->User->updateAll(array("profile_pic" => "'" . $imageName . "'"), array("id" => $userId));
				if ($save_image) {
					echo $imageName;
					exit();
				} else {
					echo 1;
					exit();
				}

				//}

			} else {
				echo 0;
				exit();
			}
		}
	}
	//edit profile
	public function editprofile() {
		if ($this->request->is('post')) {

			$get_current_user_data = $this->User->find('first',
				array(
					'conditions' => array(
						'id !=' => $this->Auth->user('id'),
						'email' => $this->request->data['email']))
			);
			if ($get_current_user_data) {
				echo 0;
				exit();
			} else {
				$this->User->id['User']['id'] = $this->Auth->user('id');
				$this->User->data['User']['email'] = $this->request->data['email'];
				$this->User->data['User']['username'] = $this->request->data['email'];
				$this->User->data['User']['first_name'] = $this->request->data['first_name'];
				$this->User->data['User']['last_name'] = $this->request->data['last_name'];
				$this->User->data['User']['city'] = $this->request->data['city'];
				$this->User->data['User']['elementary_school'] = $this->request->data['elementary_school'];
				$this->User->data['User']['high_school'] = $this->request->data['high_school'];
				$this->User->data['User']['college_or_university'] = $this->request->data['college_or_university'];
				$this->User->data['User']['about_me'] = $this->request->data['about_me'];
				if ($this->User->save($this->User->data)) {
					echo 2;
					exit();
				}
			}
		} else {
			echo 1;
			exit();
		}

	}
	public function chngpass() {
		//print_r($this->request->data);die();
		if ($this->request->is('post')) {
			$old_pass = $this->request->data['old_pass'];
			$new_pass = $this->request->data['confirm_new_pass'];
			$check_current_pass = $this->User->find('first',
				array(
					'conditions' => array(
						'id' => $this->Auth->user('id'),
						'password' => AuthComponent::password($old_pass)))
			);
			if (empty($check_current_pass)) {
				echo 0;
				exit();
			} else {
				$save_new_pass = $this->User->updateAll(array("password" => "'" . AuthComponent::password($new_pass) . "'"), array("id" => $this->Auth->user('id')));
				if ($save_new_pass) {
					echo 1;
					exit();
				}
			}
		} else {
			echo 2;
			exit();
		}
	}

	//payment response
	public function paypalresponse() {
		$this->Session->delete('msg');
		$plan_duration = $_REQUEST['item_number'];
		$plan_name = $_REQUEST['item_name'];
		$plan_amount = $_REQUEST['amt'];
		$payment_status = $_REQUEST['st'];
		$transection_id = $_REQUEST['tx'];
		$user_id = $_REQUEST['cm'];
		$months_in_number = preg_replace("/[^0-9]/", "", $plan_duration);
		$todays = date("Y-m-d");
		// $final_date = date("Y-m-d", strtotime("+1 month", $todays_date));

		$todays_date = strtotime(date("Y-m-d"));
		$end_date = date("Y-m-d", strtotime("+" . $months_in_number . 'month', $todays_date));
		$get_user_data = $this->User->find('first', array('conditions' => array('id' => $user_id)));
		$session_user_id = $this->Session->read('session_user_id');
		//echo $session_user_id;die();
		if ($get_user_data['User']['new_registration'] == 1 && $session_user_id == $user_id) {
			$this->User->id = $user_id;
			$new = $this->User->save(array(
				'User' => array(
					'subscription_plan_name' => $plan_duration
					, 'subscription_rate' => $plan_amount
					, 'subscription_start_date' => $todays
					, 'subscription_end_date' => $end_date
					, 'subscription_status' => 1
					, 'paymant_txn_id' => $transection_id
					, 'subscription_paymant_status' => 1
					, 'subscription_paymant_status_val' => $payment_status),
			)
			);
			$this->Session->delete('session_user_id');
			$this->set('end_date', $end_date);
		}

	}
// user subscription page
	public function subscriptionpage() {
		$msg = $this->Session->read('msg');
		$this->Session->setFlash($msg, 'default', array('class' => 'alert alert-success'), 'sub_cription');

		if ($this->Auth->login()) {
			$this->loadModel('Subscription');
			$get_subscription_data = $this->Subscription->find('all');
			$this->set('subscription_data', $get_subscription_data);
			$get_current_user_data = $this->User->find('first',
				array(
					'conditions' => array(
						'id' => $this->Auth->user('id'),
					)));
			$this->Session->write('session_user_id', $this->Auth->user('id'));
			$this->set('get_current_user_data', $get_current_user_data);
		} else {
			return $this->redirect(array('controller' => 'users', 'action' => 'loginuser'));
		}
	}
///contact us page function
	public function contactus() {
		//pr('hello');die();
		if ($this->request->is('post') || $this->request->is('put')) {
			$email = new CakeEmail();
			$msg_sent = $email->emailFormat('html')->template('contact')->subject('Contact from Droos Site')
				->viewVars(array('first_name' => $this->request->data['firstname']))
				->viewVars(array('last_name' => $this->request->data['last_name']))
				->viewVars(array('Affiliation' => $this->request->data['Affiliation']))
				->viewVars(array('email' => $this->request->data['email']))
				->viewVars(array('message' => $this->request->data['message']))
				->to('priyank.xornor@gmail.com')->send();
			if (msg_sent) {

				echo 1;
				exit();
			} else {
				echo 2;
				exit();
			}
		}
	}

//paypal ipn
	public function paypalipnresponse() {
		$this->loadModel('Link');
		$sample_link = $this->Link->find('all');
		print_r($sample_link);die('hgkjh');
		// $plan_duration = $_REQUEST['item_number'];
		// $plan_name = $_REQUEST['item_name'];
		// $plan_amount = $_REQUEST['amt'];
		// $payment_status = $_REQUEST['st'];
		// $transection_id = $_REQUEST['tx'];
		// $user_id = $_REQUEST['cm'];
		// echo $plan_duration . '........' . $months_in_number . '........' . $plan_name . '........' . $plan_amount . '........' . $payment_status . '........' . $transection_id . '........' . $transection_id . '........';
	}

	//prepaid users
	public function admin_PrePaiduser(){
		if ($this->request->is('post')){
			// print_r(print gmdate("Y-m-d\TH:i:s\Z"));die();
			
			for ($i=0; $i < $this->request->data['user_number']; $i++) { 
				echo time().'hww';
				
			} 
			die();       
		}
	}



}