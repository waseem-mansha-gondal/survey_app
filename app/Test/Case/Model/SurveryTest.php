<?php
App::uses('Survery', 'Model');

/**
 * Survery Test Case
 */
class SurveryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.survery',
		'app.creater',
		'app.survery_question',
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
		$this->Survery = ClassRegistry::init('Survery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Survery);

		parent::tearDown();
	}

}
