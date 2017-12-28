<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 */
class JobsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        // 删除字段验证规则
        $this->Job->validator()->remove('job_code');

        if (!empty($this->request->query)) {
            extract($this->request->query);
        }

        // 模型关联等级
        $this->Job->recursive = 0;

        // 查询条件
        $conditions = [];

        if (isset($job_code) && $job_code) {
            $conditions['Job.job_code LIKE'] = '%' . $job_code . '%';
        }

        if (isset($job_desc) && $job_desc) {
            $conditions['OR'] = [
                'Job.job_desc1 LIKE' => '%' . $job_desc . '%',
                'Job.job_desc2 LIKE' => '%' . $job_desc . '%',
                'Job.job_desc3 LIKE' => '%' . $job_desc . '%',
            ];
        }

        if (isset($template_type) && $template_type) {
            $conditions['Job.template_type'] = $template_type;
        }

        if (isset($is_enabled)) {
            $conditions['Job.is_enabled'] = $is_enabled;
        }

		$this->set('jobs', $this->Paginator->paginate($conditions));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Job->create();
			if ($this->Job->save($this->request->data)) {
				$this->Flash->success(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The job could not be saved. Please, try again.'));
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
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Job->save($this->request->data)) {
				$this->Flash->success(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$this->request->data = $this->Job->find('first', $options);
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
		$this->Job->id = $id;
		if (!$this->Job->exists()) {
			throw new NotFoundException(__('Invalid job'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Job->delete()) {
			$this->Flash->success(__('The job has been deleted.'));
		} else {
			$this->Flash->error(__('The job could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function beforeFilter() {
        parent::beforeFilter();

        //$this->Auth->allow();
    }
}
