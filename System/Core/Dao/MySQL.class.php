<?php
/**
 * Created by PhpStorm.
 * User: linzh_000
 * Date: 2016/3/17
 * Time: 10:49
 */
namespace System\Core\Dao;

class MySQL extends DaoAbstract{

    /**
     * 保留字段转义字符
     * mysql中是 ``
     * sqlserver中是 []
     * oracle中是 ""
     * @var string
     */
    protected $_l_quote = '`';
    protected $_r_quote = '`';

    /**
     * 转义保留字字段名称
     * @param string $fieldname 字段名称
     * @return string
     */
    public function escape($fieldname){}
    /**
     * 根据配置创建DSN
     * @param array $config 数据库连接配置
     * @return string
     */
    public function buildDSN(array $config){}

    /**
     * 编译组件成适应当前数据库的SQL字符串
     * @param array $components  复杂SQL的组成部分
     * @return string
     */
    public function compile(array $components){

    }
}