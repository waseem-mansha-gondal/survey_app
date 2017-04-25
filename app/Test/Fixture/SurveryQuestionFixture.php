<?php
/**
 * SurveryQuestion Fixture
 */
class SurveryQuestionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'title' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'question_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'order' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'survery_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'required' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'updated' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'question_type_id' => 1,
			'order' => 1,
			'survery_id' => 1,
			'required' => 1,
			'created' => 1,
			'updated' => 1
		),
	);

}
