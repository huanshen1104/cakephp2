<?php
App::uses('AppController', 'Controller');
App::uses('Tool', 'Lib');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class GroupsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $uses = array('Group', 'Menu');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        if (!empty($this->request->query)) {
            extract($this->request->query);
        }

        // 查询条件
        $conditions = [];

        if (isset($name) && $name) {
            $conditions['Group.name LIKE'] = '%' . $name . '%';
        }

        if (isset($group_desc) && $group_desc) {
            $conditions['Group.group_desc LIKE'] = '%' . $group_desc . '%';
        }
		$this->Group->recursive = 0;
		$this->set('groups', $this->Paginator->paginate($conditions));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
		$this->set('group', $this->Group->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Flash->success(__('The group has been saved.'));
				// 添加默认权限
				$alowActions = [
				    'Users/login',
				    'Users/logout',
					'Users/changePassword',
				    'Pages/display',
				];
				foreach ($alowActions as $action) {
					$this->Acl->allow([
							'model' => 'Group',
							'foreign_key' => $this->Group->id
					], $action);
				}
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The group could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Group->save($this->request->data)) {
				$this->Flash->success(__('The group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
			$this->request->data = $this->Group->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Group->delete()) {
			$this->Flash->success(__('The group has been deleted.'));
		} else {
			$this->Flash->error(__('The group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function groupFunction($id = null) {
	    if (!$id) {
            throw new NotFoundException(__('Invalid data'));
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
        $menus = Tool::_getSubTree($menus);
        //debug($menus);exit;
        $this->set(compact('group', 'menus'));
        $this->view = 'group_menus';
    }

    public function beforeFilter() {
        parent::beforeFilter();

        // 对 CakePHP 2.1 及以上版本
        //$this->Auth->allow();
    }
}
