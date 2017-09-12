<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
		'Session',
		'Auth',
		'RequestHandler',
	);
	public $helpers = array('Html');

	public function beforeFilter() {

		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => true);

		$this->Auth->loginRedirect = array('controller' => 'dashboards', 'action' => 'index', 'admin' => true);

		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'admin' => true);
		} else {
			$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'loginuser', 'admin' => false);

		}

		$this->Auth->authorize = array('Controller');
		$this->Auth->authenticate = array(
			'Form' => array(
				'userModel' => 'User',
				'fields' => array(
					'username' => 'username',
					'password' => 'password',
				),
			),
		);

		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			$this->loadModel('User');
			$user_data = $this->User->find('first', array('conditions' => array('id' => $this->Auth->user('id'))));

			$this->set('user_data', $user_data);
			if ($this->Session->check('Auth.User')) {
				$this->set('authUser', $this->Auth->user());
				$loggedin = $this->Session->read('Auth.User');
				$this->set(compact('loggedin'));
				$this->layout = 'admin';
			}
			$this->layout = 'admin';
		}

		$user_id = $this->Auth->user('id');
		$this->set("loggeduser", $user_id);
		if (!empty($user_id)) {
			// echo "<pre>";
			// print_r($this->Auth->user());
			// // echo "</pre>";
			// die();
			$user_role = $this->Auth->user('role');
			$login_name = $this->Auth->user('login_name');
			$profile_pic = $this->Auth->user('profile_pic');
			$this->set("loggedUserRole", $user_role);
			$this->set("login_name", $login_name);
			$this->set("profile_pic", $profile_pic);
			$this->set("user_data", $this->Auth->user());
			//die($loggeduser);
			//print_r($userdata);die();
		}
		$this->loadModel('User');
		$userdata = $this->User->find("first", array("conditions" => array("User.username" => $this->Auth->user("username"))));

		ini_set('memory_limit', '-1');

//Course inforamation
		$this->loadModel('Course');
		$allCourse = $this->Course->find('all');
		$this->set("allCourse", $allCourse);
		$this->loadModel('Link');
		$fb_link = $this->Link->find('first', array('conditions' => array('Link.name' => 'facebook')));
		$twiter_link = $this->Link->find('first', array('conditions' => array('Link.name' => 'twiter')));
		$Google_link = $this->Link->find('first', array('conditions' => array('Link.name' => 'Google')));
		$pintrest_link = $this->Link->find('first', array('conditions' => array('Link.name' => 'pinterest')));
		$this->set('fb_link', $fb_link);
		$this->set('twiter_link', $twiter_link);
		$this->set('Google_link', $Google_link);
		$this->set('pintrest_link', $pintrest_link);

	}
	public function isAuthorized($user) {
		if (($this->params['prefix'] === 'admin') && ($user['role'] != 'admin')) {
			echo '<a href="' . $this->webroot . '/users/logout">Logout</a><br />';
			die('Invalid request for ' . $user['role'] . ' user.');
		}
		return true;
	}
}
