<?php

require_once(__DIR__ . '../../core/Database.php');

class User
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function registerUser($data): bool
    {
        try {
            $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password);";
            $stmt = $this->db->prepare($query);
            $params = [
                ':username' => $data['username'],
                ':email' => $data['email'],
                ':password' => $data['password'],
            ];
            return $stmt->execute($params);
        } catch (PDOException $e) {
            exit('Insert user failed: ' . $e->getMessage());
        }
    }

    public function findEmail($email): bool
    {
        $query = "SELECT email FROM users WHERE email = :email;";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->rowCount();

        return ($result > 0) ? true : false;
    }
}
