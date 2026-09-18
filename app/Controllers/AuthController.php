<?php

class AuthController
{
    private $validUsername = 'admin';
    private $validPassword = '12345';

    public function loginForm()
    {
        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function login()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === $this->validUsername && $password === $this->validPassword) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header('Location: /si-akademik2/public/dashboard');
            exit();
        } else {
            $error = 'Invalid username or password';
            require_once __DIR__ . '/../Views/auth/login.php';
        }
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();

        header('Location: /si-akademik2/public/login');
        exit();
    }

    public function dashboard()
    {
        require_once __DIR__ . '/../Views/dashboard/index.php';
    }
}