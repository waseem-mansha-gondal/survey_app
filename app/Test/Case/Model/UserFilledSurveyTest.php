<?php
App::uses('UserFilledSurvey', 'Model');

/**
 * UserFilledSurvey Test Case
 */
class UserFilledSurveyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_filled_survey',
		'app.user',
		'app.user_role',
		'app.survey',
		'app.survey_question',
		'app.question_type',
		'app.question_option',
		'app.option_selected'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserFilledSurvey = ClassRegistry::init('UserFilledSurvey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserFilledSurvey);

		parent::tearDown();
	}

}
