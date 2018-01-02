<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('Tool', 'Lib');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    // 设置主题
    public $theme = 'ExerciseTask';

    public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Flash',
        'Session',
        'Security',
        'DebugKit.Toolbar'
    );

    public $helpers = array('Html', 'Form', 'Session');

    public function beforeFilter() {
        //配置 AuthComponent 组件
        $this->Auth->loginAction = array(
            'controller' => 'users',
            'action' => 'login'
        );
        $this->Auth->logoutRedirect = array(
            'controller' => 'users',
            'action' => 'login'
        );
        $this->Auth->loginRedirect = array(
            'controller' => 'pages',
            'action' => 'display'
        );

        //$this->Auth->allow();

        if (isset($_SESSION['Auth']['User']['username']) && $_SESSION['Auth']['User']['username'])
            $this->_checkAcl();
    }

    protected function _checkAcl($action = '') {
        $groupId = $this->Auth->user('group_id');

        empty($action) && ($action  = $this->request->controller . '/' .$this->request->action);

        //debug($groupId);
        //debug($action);
        $isOk =  $this->Acl->check([
            'model' => 'Group',
            'foreign_key' => $groupId
        ], $action);
        //debug($isOk);exit;
        if (!$isOk)
            $this->Flash->error(__('不好意思，你没有权限哦'));
    }

}
