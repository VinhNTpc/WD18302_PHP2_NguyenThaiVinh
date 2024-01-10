<?php

require_once "vendor\autoload.php";

use App\Database;
use App\Controller\BaseController;
use App\Model\BaseModel;
use App\Core\Route;

$data =new Database();
echo $data->age;