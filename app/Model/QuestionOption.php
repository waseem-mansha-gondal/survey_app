<?php
App::uses('AppModel', 'Model');
/**
 * QuestionOption Model
 *
 * @property SurveyQuestion $SurveyQuestion
 */
class QuestionOption extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SurveyQuestion' => array(
			'className' => 'SurveyQuestion',
			'foreignKey' => 'survey_question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
}
