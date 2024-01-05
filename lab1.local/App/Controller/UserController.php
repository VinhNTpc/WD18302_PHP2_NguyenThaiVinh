<?php

class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function getUsers() {
        $users = $this->userModel->getUsers();
        // Gọi view để hiển thị danh sách user
        require_once('user_view.php');
    }
}
?>
