<?php
class LoginModel
{
    private $table = 'user';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function checkLogin($data)
    {
        $query = "SELECT * FROM user WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $user = $this->db->single();

        if ($user && password_verify($data['password'], $user['password'])) {
            return $user;
        }
        return false;
    }
}
