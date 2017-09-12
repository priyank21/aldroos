<?php
App::uses('AppModel', 'Model');
class Chapter extends AppModel {
	public $hasMany = array(
		'Topic' => array(
			'className' => 'Topic',
			'foreignKey' => 'chapter_id',
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