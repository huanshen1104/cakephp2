<?php
App::uses('AppController', 'Controller');
App::uses('Tool', 'Lib');
/**
 * GroupsMenus Controller
 *
 * @property GroupsMenu $GroupsMenu
 * @property PaginatorComponent $Paginator
 */
class GroupsMenusController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $uses = array('GroupsMenu', 'Group', 'Menu');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GroupsMenu->recursive = 0;
		$this->set('groupsMenus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GroupsMenu->exists($id)) {
			throw new NotFoundException(__('Invalid groups menu'));
		}
		$options = array('conditions' => array('GroupsMenu.' . $this->GroupsMenu->primaryKey => $id));
		$this->set('groupsMenu', $this->GroupsMenu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GroupsMenu->create();
			if ($this->GroupsMenu->save($this->request->data)) {
				$this->Flash->success(__('The groups menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The groups menu could not be saved. Please, try again.'));
			}
		}
		$groups = $this->GroupsMenu->Group->find('list');
		$menus = $this->GroupsMenu->Menu->find('list');
		$this->set(compact('groups', 'menus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function oldEdit($id = null) {
		if (!$this->GroupsMenu->exists($id)) {
			throw new NotFoundException(__('Invalid groups menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GroupsMenu->save($this->request->data)) {
				$this->Flash->success(__('The groups menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The groups menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GroupsMenu.' . $this->GroupsMenu->primaryKey => $id));
			$this->request->data = $this->GroupsMenu->find('first', $options);
		}
		$groups = $this->GroupsMenu->Group->find('list');
		$menus = $this->GroupsMenu->Menu->find('list');
		$this->set(compact('groups', 'menus'));
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid data'));
		}
		if ($this->request->is(array('post', 'put'))) {
			debug($this->request->data);exit;
			//if ($this->request->data['GroupsMenus'])
		}
		$group = $this->Group->find('first', [
				'recursive' => 0,
				'conditions' => ['id' => $id],
				'fields' => ['name', 'id']
		]);
		$group = $group['Group'];
		$menus = $this->Menu->find('all', [
				'recursive' => 0,
				'conditions' => ['Menu.row_status' => 1],
				'fields' => ['Menu.id','Menu.menu_code', 'Menu.parent_id', 'Menu.menu_desc'],
				'order'  => ['Menu.sort_num ASC']
		]);
		$menus = array_column($menus, 'Menu');
		$menus = Tool::getSubTree($menus);
		//debug($menus);exit;
		$this->set(compact('group', 'menus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GroupsMenu->id = $id;
		if (!$this->GroupsMenu->exists()) {
			throw new NotFoundException(__('Invalid groups menu'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GroupsMenu->delete()) {
			$this->Flash->success(__('The groups menu has been deleted.'));
		} else {
			$this->Flash->error(__('The groups menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
