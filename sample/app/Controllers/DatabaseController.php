<?php
namespace App\Controllers;
use App\Controllers\Controller;

class DatabaseController extends Controller{
    protected $db = $_ENV['database'];
    protected $username = $_ENV['user'];
    protected $password = $_ENV['password'];

    protected $host = $_ENV['host'];
    

    public function getUser($uid) {
        $sql = "SELECT * FROM users WHERE uid = '$uid'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
}
