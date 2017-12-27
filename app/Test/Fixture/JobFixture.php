<?php
/**
 * Job Fixture
 */
class JobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'job_code' => array('type' => 'string', 'null' => false, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'job_desc1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'job_desc2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'job_desc3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'is_enabled' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'template_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'template_content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'scheduled_dt' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'schedule_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'week_mask' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_run_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'next_run_time' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'start_range' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'end_range' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'is_resend' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'job_status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'retry_times' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fail_count' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'error_code' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'success_job_log' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fail_job_log' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'row_modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'row_status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'job_code' => 'Lorem ip',
			'job_desc1' => 'Lorem ipsum dolor sit amet',
			'job_desc2' => 'Lorem ipsum dolor sit amet',
			'job_desc3' => 'Lorem ipsum dolor sit amet',
			'is_enabled' => 1,
			'template_type' => 'Lor',
			'template_content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'scheduled_dt' => 'Lorem ipsum dolor sit amet',
			'schedule_type' => 'Lorem ipsum dolor sit ame',
			'week_mask' => 'Lorem',
			'last_run_time' => '2017-12-26 14:15:26',
			'next_run_time' => '2017-12-26 14:15:26',
			'start_range' => '2017-12-26 14:15:26',
			'end_range' => '2017-12-26 14:15:26',
			'is_resend' => 1,
			'job_status' => 'Lorem ipsum dolor sit ame',
			'retry_times' => 1,
			'fail_count' => 1,
			'error_code' => 1,
			'success_job_log' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fail_job_log' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'row_modified' => '2017-12-26 14:15:26',
			'row_status' => 'Lorem ipsum dolor sit ame'
		),
	);

}
