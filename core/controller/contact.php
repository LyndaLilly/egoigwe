<?php

if (isset($_POST['contact'])) {

    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $message = sanitizeInput($_POST['message']);




    $userData = [
    'name' =>  $name,
    'email'=> $email,
    'message' => $message
    ];

    $msg = isEmpty($userData);

    if ($msg != 1) {
        redirect('contact', $msg, 'danger');
    }



    $pdo->insert('INSERT INTO contacts(`name`,email, `message`) VALUES(?,?,?)', [$userData['name'], $userData['email'], $userData['message']]);


   
        redirect('contact', "message sent successful", 'success');

 exit();
    }
   


  




require_once('view/guest/view.contact.php');