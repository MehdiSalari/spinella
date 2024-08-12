<?php 
namespace App\Controllers;
use Dotenv\Dotenv;
class Controller {
    protected $conn;
    public function __construct() {
        $dotenv = Dotenv::createImmutable(getcwd());
        $dotenv->load();
        $this->conn = mysqli_connect($_ENV['host'], $_ENV['user'], $_ENV['password'], $_ENV['database']);
    }
}

