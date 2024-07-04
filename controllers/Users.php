<?php

require_once(__DIR__ . '../../models/User.php');
class Users
{
    private $userModel;
    public function register()
    {
        $this->userModel = new User;
    }
}

$init = new Users;

// Ensure that user is sending a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['type']) {
        case 'register':
            $init->register();
            break;
    }
}
