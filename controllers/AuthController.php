<?php
require_once 'models/User.php';

class AuthController
{
    private $db;
    private $user;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user = new User($this->db);
        session_start();
    }

    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'login';

        switch ($action) {
            case 'login':
                $this->login();
                break;
            case 'register':
                $this->register();
                break;
            case 'logout':
                $this->logout();
                break;
        }
    }

    private function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->user->username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->user->userExists()) {
                if (password_verify($password, $this->user->password)) {
                    $_SESSION['user_id'] = $this->user->id;
                    $_SESSION['username'] = $this->user->username;
                    header("Location: index.php?controller=ticket");
                    exit;
                } else {
                    echo "Invalid username or password.";
                    echo "<a href='index.php?controller=auth&action=login'>Back to login</a>";
                }
            } else {
                header("Location: index.php?controller=auth&action=register");
                exit;
            }
        } else {
            include 'views/user/login.php';
        }
    }

    private function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->user->username = $_POST['username'];
            $this->user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            if (!$this->user->userExists()) {
                if ($this->user->create()) {
                    header("Location: index.php?controller=auth&action=login");
                    exit;
                } else {
                    echo "Registration failed.";
                    echo "<a href='index.php?controller=auth&action=register'>Back to register</a>";
                }
            } else {
                echo "User already exists.";
                echo "<a href='index.php?controller=auth&action=login'>Back to login</a>";
                header("Location: index.php?controller=auth&action=login");
                exit;
            }
        } else {
            include 'views/user/register.php';
        }
    }

    private function logout()
    {
        session_unset();
        session_destroy();
        header("Location: index.php?controller=auth&action=login");
        exit;
    }

    public function checkAuth()
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?controller=auth&action=login");
            exit;
        }
    }
}
