<?php
App::uses('QuestionOption', 'Model');

/**
 * QuestionOption Test Case
 */
class QuestionOptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_option',
		'app.survey_question',
		'app.question_type',
		'app.survey',
		'app.creater'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionOption = ClassRegistry::init('QuestionOption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionOption);

		parent::tearDown();
	}

}
