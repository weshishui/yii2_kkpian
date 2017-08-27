<?php
/**
 * Created by PhpStorm.
 * User: gtrhr
 * Date: 2017/8/26
 * Time: 21:46
 */
namespace rzy\kkpian;

use \Yii;
class T1{
    public $desc;
    public function test(){
        echo Yii::$app->redis->hostname;
        echo $this->desc;
    }
}