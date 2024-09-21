<?php
namespace App\Controllers;
use App\Controllers\Controller;

class AuthController extends Controller
{
    // Views
    public function loginView(){
        return view("admin/login");
    }

    public function singupView(){
        return view("auth/signup");
    }

    public function verifyView(){
        return view("auth/verify");
    }

    public function forgotView(){
        return view("auth/forgot");
    }

    public function resetView(){
        return view("auth/respass");
    }

    // Actions
    public function login() {
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $user = htmlspecialchars($_POST['user']);
            $password = md5(htmlspecialchars($_POST['password']));
            $sql = "SELECT * FROM `admin` WHERE ( `user` = '$user' OR `email` = '$user' ) AND `status` = '1'";
            // var_dump($sql); die;
            $result = mysqli_query($this->conn, $sql);
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    switch ($password) {
                        case $row['pass']:
                            $_SESSION['admin'] = $row['uuid'];
                            header("location: " . url('dashboard'));
                            break;
                        default:
                            $_SESSION['error'] = 'Incorrect Email or Password!';
                            header("location: " . url('login'));
                            break;
                    }
                }
                else {
                    $_SESSION['error'] = 'Incorrect Email or Password!';
                    header("location: " . url('login'));
                }
            }
            else {
                $_SESSION['error'] = 'Incorrect Email or Password!';
                header("location: " . url('login'));
            }
        }
        else {
            $_SESSION['error'] = 'All fields are required!';
            header("location: " . url('login'));
        }
    }


    // public function signup() {
    //     if (isset($_POST['register'])) {
    //         if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repassword'])) {
    //           $name = $_POST['name'];
    //           $email = $_POST['email'];
    //           $password = $_POST['password'];
    //           $repassword = $_POST['repassword'];
              
    //           if ($password == $repassword) {
    //               $sql = "SELECT * FROM users WHERE email = '$email'";
    //               $result = mysqli_query($this->conn, $sql);
    //               if (mysqli_num_rows($result) > 0) {
    //                   $_SESSION['error'] = 'Email already exists!';
    //                   header("location: $_ENV[BASE_PATH]/signup");
    //               } else {
    //                   $password = md5($password);
    //                   $_SESSION['name'] = $name;
    //                   $_SESSION['email'] = $email;
    //                   $_SESSION['password'] = $password;
    //                   $_SESSION['code'] = rand(999999, 111111);
    //                   header("Location: $_ENV[BASE_PATH]/verify");
    //               }
    //           } else {
    //               $_SESSION['error'] = 'Passwords does not match!';
    //               header("location: $_ENV[BASE_PATH]/signup");
    //           }
    //         }
    //         else {
    //           $_SESSION['error'] = 'All fields are required!';
    //           header("location: $_ENV[BASE_PATH]/signup");
    //         }
    //       }          
    // }

    public function verify() {
        if (isset($_POST['verify'])) {
            if (!empty($_POST['code'])) {
                if ($_POST['code'] == $_SESSION['code']) {
                    $sql = "SELECT * FROM users WHERE email = '$_SESSION[email]'";
                    $result = mysqli_query($this->conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $sql = "UPDATE users SET status = 'respass' WHERE email = '$_SESSION[email]'";
                        $result = mysqli_query($this->conn, $sql);
                        unset($_SESSION['code']);
                        mysqli_close($this->conn);
                        header("location: $_ENV[BASE_PATH]/reset-password");
                    }
                    else {
                        $sql = "INSERT INTO users (name, email, pass) VALUES ('$_SESSION[name]', '$_SESSION[email]', '$_SESSION[password]')";
                        $result = mysqli_query($this->conn, $sql);
                        if ($result) {
                            $sql = "SELECT * FROM users WHERE email = '$_SESSION[email]'";
                            $result = mysqli_query($this->conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $_SESSION['user'] = $row['uid'];
                            unset($_SESSION['code']);
                            mysqli_close($this->conn);
                            header("location: $_ENV[BASE_PATH]");
                        }
                        else {
                            $_SESSION['error'] = 'There was an error while registering. Please try again.';
                            header("location: $_ENV[BASE_PATH]/signup");
                        }
                    }
                }
                else {
                    $_SESSION['error'] = 'Incorrect code.';
                    header("location: $_ENV[BASE_PATH]/verify");
                }
            }
            else {
                $_SESSION['error'] = 'All fields are required.';
                header("location: $_ENV[BASE_PATH]/verify");
            }
        }
    }

    public function forgot() {
        if (isset($_POST['forgot'])) {
            if (!empty($_POST['email'])) {
                $sql = "SELECT * FROM users WHERE email = '$_POST[email]'";
                $result = mysqli_query($this->conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['code'] = rand(999999, 111111);
                    header("location: $_ENV[BASE_PATH]/verify");
                }
                else {
                    $_SESSION['error'] = 'Incorrect Email!';
                    header("location: $_ENV[BASE_PATH]/forgot-password");
                }
            }
            else {
                $_SESSION['error'] = 'Fill the email field!';
                header("location: $_ENV[BASE_PATH]/forgot-password");
            }
        }
    }

    public function reset() {
        if (isset($_POST['reset'])) {
            if ($_POST['password'] != $_POST['repassword']) {
                $_SESSION['error'] = 'Passwords does not match!';
                header("location: $_ENV[BASE_PATH]/reset-password");
            } else {
                $password = md5($_POST['password']);
                $sql = "UPDATE users SET pass = '$password', status = 'active' WHERE email = '$_SESSION[email]'";
                mysqli_query($this->conn, $sql);
                header("location: $_ENV[BASE_PATH]/login");
            }
        }
    }

    public function logout() {
        session_destroy();
        header("location: $_ENV[BASE_PATH]");
    }
}