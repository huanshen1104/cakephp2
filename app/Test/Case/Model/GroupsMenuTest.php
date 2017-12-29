<?php
App::uses('GroupsMenu', 'Model');

/**
 * GroupsMenu Test Case
 */
class GroupsMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.groups_menu',
		'app.group',
		'app.user',
		'app.post',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupsMenu = ClassRegistry::init('GroupsMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupsMenu);

		parent::tearDown();
	}

}
