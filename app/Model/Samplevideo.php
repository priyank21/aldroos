<?php
App::uses('AppModel', 'Model');
class Samplevideo extends AppModel {
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'uploaded_by',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),

	);
}
?>