<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/7
 * Time: 15:41
 */

namespace Home\Controller;


use Think\Controller;

class ForumController extends CommonController {
    public function index()
    {
        $this->display('Public:head');

        $this->display();

        $this->display('Public:foot');
    }

}