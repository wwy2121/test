<?php
/**
 * Created by PhpStorm.
 * User: wwy2121
 * Date: 2019/9/17
 * Time: 0:21
 */

namespace My\test;
class my{
    public function __construct(){
        echo 'my_construct';
    }

    public function add() {
        echo time();
    }
}