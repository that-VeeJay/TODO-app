<?php

require_once(__DIR__ . '../../core/Database.php');

class User
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
}
