<?php

$routes = [
    '/' => 'core/controller/home.php',
    'home' => 'core/controller/home.php',
    'about' => 'core/controller/about.php',
    'contact' => 'core/controller/contact.php',
    'services' => 'core/controller/services.php',
    'gallery' => 'core/controller/gallery.php',
    'auth-register' => 'core/controller/Register.php',
    'auth-login' => 'core/controller/Login.php',
    'admin-dashboard' => 'core/controller/admin-dashboard.php',
    'upload' => 'core/controller/upload.php',
    'delete' => 'core/controller/delete.php',
    'create-post' => 'core/controller/create-post.php',
    'users' => 'core/controller/users.php',
];


if(array_key_exists($url,$routes)){
    
    require_once($routes[$url]);
    
}else{
   
    abort(404);
}

