<?php
/**
 * Created by PhpStorm.
 * User: lilvqing
 * Date: 2017/12/29
 * Time: 14:14
 */

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
    public static function getSubTree($data , $id = 0 , $lev = 0) {
        static $son = array();

        foreach($data as $key => $value) {
            if($value['parent_id'] == $id) {
                $value['lev'] = $lev;
                $son[] = $value;
                self::getSubTree($data , $value['id'] , $lev+1);
            }
        }

        return $son;
    }
}