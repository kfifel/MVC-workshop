<?php

namespace src\model;
use src\model\Jock;
require_once 'src/model/jock.php';

class JockController
{
    private Jock $jock;

    public function __construct()
    {
        $this->jock =new Jock(null, null);
    }
    public function getAllJocks():void
    {
        $jocks =  $this->jock->getAllJock();
        require 'src/view/jockView.php';
    }

    public function createJock(array $array):void
    {
        $jocks =  $this->jock->addJock($array);
    }
}