<?php

namespace App;

class Database{

    public $age=20;

    public function _getName(){
        return "Xin chao co chu anh chi".$this->age;// chi xuất trong đối tượng
    }
}