<?php
App::uses('UserRole', 'Model');

/**
 * UserRole Test Case
 */
class UserRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_role',
		'app.user',
		'app.user_filled_survey',
		'app.survery',
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
		$this->UserRole = ClassRegistry::init('UserRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserRole);

		parent::tearDown();
	}

}
