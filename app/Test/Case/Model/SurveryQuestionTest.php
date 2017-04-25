<?php
App::uses('SurveryQuestion', 'Model');

/**
 * SurveryQuestion Test Case
 */
class SurveryQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.survery_question',
		'app.question_type',
		'app.survery',
		'app.creater',
		'app.user_filled_survey',
		'app.user',
		'app.user_role',
		'app.question',
		'app.option_selected'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SurveryQuestion = ClassRegistry::init('SurveryQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SurveryQuestion);

		parent::tearDown();
	}

}
