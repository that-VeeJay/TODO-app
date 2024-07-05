<?php

require_once(__DIR__ . '../../models/User.php');
require_once(__DIR__ . '../../helpers/notification.helper.php');
class Users
{
    private $userModel;
    private static $data;

    public function __construct()
    {
        $this->userModel = new User;
        self::$data = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'confirm_password' => $_POST['confirm_password'],
        ];
    }

    private function inputFieldsValidation()
    {
        $errors = [];

        if (!preg_match('/^[a-zA-Z ]+$/', self::$data['username'])) {
            $errors[] = 'Invalid Username.';
        }

        if (!filter_var(self::$data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid Email';
        }

        if ($this->userModel->findEmail(self::$data['email']) == true) {
            $errors[] = 'Email is already exists.';
        }

        if (strlen(self::$data['password']) < 3) {
            $errors[] = 'Password must be at least 8 characters long.';
        }

        if (self::$data['password'] != self::$data['confirm_password']) {
            $errors[] = 'Passwords does not match.';
        }
        return $errors;
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = $this->inputFieldsValidation();
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    flashMessage('errors', $error);
                }
                header("Location: ../registration.php");
            } else {
                $this->userModel->registerUser(self::$data);
                flashMessage('success', 'Registration successful!');
                header("Location: ../registration.php");
                exit();
            }
        }
    }
}

$init = new Users();
$init->register();
