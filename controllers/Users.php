<?php

require_once(__DIR__ . '../../models/User.php');
require_once(__DIR__ . '../../helpers/notification.helper.php');
class Users
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User;
    }

    private function inputFieldsValidation($data)
    {
        $errors = [];

        if (!preg_match('/^[a-zA-Z ]+$/', $data['username'])) {
            $errors[] = 'Invalid Username.';
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid Email';
        }

        if ($this->userModel->findEmail($data['email']) == true) {
            $errors[] = 'Email is already exists.';
        }

        if (strlen($data['password']) < 3) {
            $errors[] = 'Password must be at least 8 characters long.';
        }

        if ($data['password'] != $data['confirm_password']) {
            $errors[] = 'Passwords does not match.';
        }
        return $errors;
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
            ];
            $errors = $this->inputFieldsValidation($data);
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    flashMessage('errors', $error);
                }
                header("Location: ../registration.php");
            } else {
                $this->userModel->registerUser($data);
                flashMessage('success', 'Registration successful!');
                header("Location: ../registration.php");
                exit();
            }
        }
    }
    public function login()
    {
        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
        ];

        if ($this->userModel->verifyPassword($data) == true) {
            header("Location: ../homepage.php");
            exit;
        } else {
            flashMessage('errors', 'Invalid Credentials.');
            header("Location: ../login.php");
            exit();
        }
    }
}

$init = new Users();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['type']) {
        case 'register';
            $init->register();
            break;
        case 'login':
            $init->login();
            break;
        default:
    }
}
