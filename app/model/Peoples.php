<?php

namespace app\model;

use think\Model;


class Peoples extends Model
{
    protected $table = 'Peoples';
    public $sn;
    public $wxname;
    public $role;
    public $phone;
    public $beizhu;
}