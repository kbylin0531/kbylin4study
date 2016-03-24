<?php
/**
 * Created by PhpStorm.
 * User: linzh_000
 * Date: 2016/3/15
 * Time: 16:36
 */
namespace Test;
use System\Traits\Crux;

class Z {
    use Crux;

    public function dump(){
        echo '<pre>';
        var_dump(static::$_conventions,static::$_instances);
    }

}

class Acer extends Z{

//    const CONF_NAME = 'acerantor';

    public function __construct(){
    }
}

class Asus extends Z{

//    const CONF_NAME = 'asusen';

    public function __construct(){
    }

}

//$a = new A();
//$b = new B();

/**
 * 自动调用
 */
//$a = Acer::getInstance(0,[
//    'DRIVER_CLASS_LIST' => [Acer::class]
//]);
//$b = Asus::getInstance(0,[
//    'DRIVER_CLASS_LIST' => [Asus::class]
//]);

$a = Acer::getInstance();
$b = Asus::getInstance();


//打印一样的结果
$a->dump();
$b->dump();
