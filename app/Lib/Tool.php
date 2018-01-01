<?php
/**
 * Created by PhpStorm.
 * User: lilvqing
 * Date: 2017/12/29
 * Time: 14:14
 */

App::uses('GroupsMenu', 'Model');
App::uses('Menu', 'Model');

class Tool
{
    /**
     * 获取子孙树
     *
     * @param   array        $data   待分类的数据
     * @param   int/string   $id     要找的子节点id
     * @param   int          $lev    节点等级
     *
     * @return array
     */
    public static function _getSubTree($data , $id = 0 , $lev = 0) {
        static $son = [];

        foreach($data as $key => $value) {
            if($value['parent_id'] == $id) {
                $value['lev'] = $lev;
                $son[] = $value;
                self::_getSubTree($data , $value['id'] , $lev+1);
            }
        }

        return $son;
    }

    public static function _getAllMeus() {
        $menus = (new Menu())->find('all', [
            'recursive' => 0,
            'conditions' => ['Menu.row_status' => 1],
            'fields' => ['Menu.id','Menu.menu_code', 'Menu.parent_id', 'Menu.menu_desc'],
            'order'  => ['Menu.sort_num ASC']
        ]);
        $menus = array_column($menus, 'Menu');
        $menus = Tool::_getSubTree($menus);

        return $menus;
    }

    /**
     * 获取当前用户菜单权限
     */
    public static function _getLeftMenus(){
        $groupId = $_SESSION['Auth']['User']['group_id'];
        // 当前用户组权限(菜单)信息
        $groupMenuIds = (new GroupsMenu())->findAllByGroupId($groupId, ['menu_id']);
        $groupMenuIds = array_column($groupMenuIds, 'GroupsMenu');
        $groupMenuIds = array_column($groupMenuIds, 'menu_id');
        // 所有菜单信息
        $menus = self::_getAllMeus();
        foreach ((array)$menus as $key=>$menu) {
            if (in_array($menu['id'], $groupMenuIds)) {
                continue;
            } else {
                unset($menus[$key]);
            }
        }

        return $menus ? $menus : [];
    }
}