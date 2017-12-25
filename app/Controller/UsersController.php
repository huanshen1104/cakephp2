<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	    // 1) find方法 (first、all、count、list、threaded、neighbors)
        // $res = $this->User->find('all', [
        //    'recursive'  => 0, // 模型关联等级
        //    'fields'     => ['User.username', 'User.group_id'],// 查询的字段
        //    'conditions' => ['group_id' => 11],// 条件
        //    'order'      => ['User.id DESC'] // 排序
        // ]);

        // 2) 魔法查询
        // $res = $this->User->findByUsername('user1'); // 类似find('first')
        // $res = $this->User->findAllByUsername('user1');// 类似find('all')
        // $res = $this->User->findAllByGroupId('user1');。

        // 3）Model::query()
        // $res = $this->User->query('SELECT * FROM `users` WHERE 1');

        // 4) Model::field(string $name, array $conditions = null, string $order = null)
        // $this->User->id = 11;
        // $res = $this->User->field('username', ['id' => '11']);

        // 5) Model::read($fields, $id)
        // $res = $this->User->read('username', 11);

        // 6) 复杂查询

        //$db = $this->User->getDataSource();
        //$res = $db->fetchAll('SELECT * FROM `users` WHERE 1');
        //$res = $db->fetchAll('SHOW TABLES');
	    //debug($res);
	    // 动态加载分页组件
	    $this->Paginator = $this->Components->load('Paginator');
	    // 设置每页记录数
        $this->Paginator->settings['limit'] = 2;
        // 模型关联等级
		$this->User->recursive = 0;
		// 模板变量赋值
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Your username or password was incorrect.'));
        }
    }

    public function logout() {
        $this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
    }

    public function beforeFilter() {
        parent::beforeFilter();

        //$this->Auth->allow('initDB'); // 用完之后就可以删除这一行
    }

    public function initDB() {
        $group = $this->User->Group;

        // 允许 admins 访问一切
        $group->id = 11;
        $this->Acl->allow($group, 'controllers');

        // 允许 managers 访问 posts 和 widgets
        $group->id = 12;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Posts');
        $this->Acl->allow($group, 'controllers/Widgets');

        // 只允许 users 添加和编辑 posts 和 widgets
        $group->id = 13;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Posts/add');
        $this->Acl->allow($group, 'controllers/Posts/edit');
        $this->Acl->allow($group, 'controllers/Widgets/add');
        $this->Acl->allow($group, 'controllers/Widgets/edit');

        // 加上 exit，避免糟糕的 "missing views" 错误消息
        echo "all done";
        exit;
    }
}
