<?php
App::uses('SurveyQuestion', 'Model');

/**
 * SurveyQuestion Test Case
 */
class SurveyQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.survey_question',
		'app.question_type',
		'app.survey',
		'app.creater',
		'app.question_option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SurveyQuestion = ClassRegistry::init('SurveyQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SurveyQuestion);

		parent::tearDown();
	}

}
