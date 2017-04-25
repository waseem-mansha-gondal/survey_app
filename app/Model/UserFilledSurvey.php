<?php
App::uses('AppModel', 'Model');
/**
 * UserFilledSurvey Model
 *
 * @property User $User
 * @property Survey $Survey
 * @property SurveyQuestion $SurveyQuestion
 * @property OptionSelected $OptionSelected
 */
class UserFilledSurvey extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'user_filled_survey';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'y' => array(
				'rule' => array('y'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Survey' => array(
			'className' => 'Survey',
			'foreignKey' => 'survey_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SurveyQuestion' => array(
			'className' => 'SurveyQuestion',
			'foreignKey' => 'survey_question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'QuestionOption' => array(
			'className' => 'QuestionOption',
			'foreignKey' => 'option_selected_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
