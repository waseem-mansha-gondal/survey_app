<?php
App::uses('Survey', 'Model');

/**
 * Survey Test Case
 */
class SurveyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.survey',
		'app.creater',
		'app.survey_question',
		'app.question_type',
		'app.question_option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Survey = ClassRegistry::init('Survey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Survey);

		parent::tearDown();
	}

}
