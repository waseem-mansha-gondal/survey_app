<?php
App::uses('AppModel', 'Model');
/**
 * QuestionType Model
 *
 * @property SurveyQuestion $SurveyQuestion
 */
class QuestionType extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SurveyQuestion' => array(
			'className' => 'SurveyQuestion',
			'foreignKey' => 'question_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
