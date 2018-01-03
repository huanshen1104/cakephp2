<?php
App::uses('AppController', 'Controller');
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

	/**
	 * 编辑用户组菜单权限
	 *
	 * @param int $id 用户组ID
     *
     * @return void
	 */
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid data'));
		}
		if ($this->request->is(array('post', 'put'))) {
			//debug($this->request->data);exit;
			$groupId   = isset($this->request->data['GroupsMenus']['group_id']) ? $this->request->data['GroupsMenus']['group_id'] : 0;
			$menuIds   = isset($this->request->data['GroupsMenus']['menu_id']) ? $this->request->data['GroupsMenus']['menu_id'] : [];
			$menuCodes = isset($this->request->data['GroupsMenus']['menu_code']) ? $this->request->data['GroupsMenus']['menu_code'] : [];
			if ($groupId && $menuIds) {
				// 插入关联数据
				$insertData   = [];
				$tempArr      = [];
				$useMenuCodes = [];
				foreach ($menuIds as $menuId) {
					$tempArr['group_id'] = $groupId;
					$tempArr['menu_id']  = $menuId;
					$insertData[]        = $tempArr;
					// 父级菜单
					$findData = $this->Menu->find('first', [
							'recursive' => 0,
							'conditions' => ['Menu.id' => $menuId],
							'fields' => ['Menu.parent_id']
					]);
					$findData && $parentId = $findData['Menu']['parent_id'];
					(isset($parentId) && $parentId) && $insertData[] = ['group_id' => $groupId, 'menu_id' => $parentId];
					// 菜单code
					$useMenuCodes[]      = $menuCodes[$menuId];
				}
				try {
					// 开启事务
					$dataSource = $this->GroupsMenu->getDataSource();
					$dataSource->begin();
					// 删除原有记录
					$this->GroupsMenu->deleteAll([
							'group_id' => $groupId
					]);
					if ($this->GroupsMenu->saveAll($insertData)) {
						// 禁用所有权限
						foreach ($menuCodes as $menuCodeA) {
							$this->Acl->deny([
									'model' => 'Group',
									'foreign_key' => $groupId
							], $menuCodeA);
						}
						// 添加所选权限
						foreach ($useMenuCodes as $menuCodeB) {
							$this->Acl->allow([
									'model' => 'Group',
									'foreign_key' => $groupId
							], $menuCodeB);
						}
					}
					// 提交事务
					$dataSource->commit();
					$this->Flash->success(__("The Function Authority for Role #{$groupId} has been saved."));
					return $this->redirect(array('controller' => 'groups', 'action' => 'index'));
				} catch (Exception $e){
					// 回滚
					$dataSource->rollback();
					$this->Flash->error(__("The Function Authority for Role #{$groupId} not be saved. Please, try again."));
				}
			}
		}
		// 当前用户组权限(菜单)信息
		$groupMenuIds = $this->GroupsMenu->findAllByGroupId($id, ['menu_id']);
		$groupMenuIds = array_column($groupMenuIds, 'GroupsMenu');
		$groupMenuIds = array_column($groupMenuIds, 'menu_id');
		// 用户组信息
		$group = $this->Group->find('first', [
				'recursive' => 0,
				'conditions' => ['Group.id' => $id],
				'fields' => ['Group.name', 'Group.id']
		]);
		$group = $group['Group'];
		// 所有菜单信息
		$menus = Tool::_getAllMeus();
		$this->set(compact('groupMenuIds', 'group', 'menus'));
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
