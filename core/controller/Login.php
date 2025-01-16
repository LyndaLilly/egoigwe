<?php

if (isset($_POST['login'])) {
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);

    $userData = [
        'email' => $email,
         'password' => $password
        
        ];

    $msg = isEmpty($userData);

    if ($msg != 1) {
        redirect('auth-login', $msg, 'danger');
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $res = $pdo->select("SELECT * FROM users WHERE email=? LIMIT 1", [$email])->fetch(PDO::FETCH_ASSOC);
    } 

    if (empty($res)) {
        redirect('auth-login',  "Email, Username or password incorrect!!!", 'danger');
    }

    $res = json_decode(json_encode($res));

    if (!password_verify($userData['password'], $res->password)) {
        redirect('login', 'Email, Username, or password incorrect!!!', 'danger');
    }
   

    if (!empty($res)) {
        Session::put('loggedin', $res->id);
        
        redirect('admin-dashboard', 'login successful', 'success');

    } else {
        redirect('auth-login', 'Email, Username, or password incorrect!!!','danger');
    }
    exit;
}

require_once 'view/guest/auth/auth-login.php';
