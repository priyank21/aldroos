<?php
App::uses('AppModel', 'Model');
class Course extends AppModel {
	public $belongsTo = array(
		'Samplevideo' => array(
			'className' => 'Samplevideo',
			'foreignKey' => 'sample_video_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),

	);
	public $hasMany = array(
		'Chapter' => array(
			'className' => 'Chapter',
			'foreignKey' => 'course_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => '',
		),
	);
}
?>