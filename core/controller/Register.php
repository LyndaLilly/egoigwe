<?php

if (isset($_POST['register'])) {

    $username = sanitizeInput($_POST['username']);
    $email = sanitizeInput($_POST['email']);

    $_SESSION['email'] = $email; 

    $password = sanitizeInput($_POST['password']);
    $confirm = sanitizeInput($_POST['confirm']);


    $userData = [
    'username' => $username,
    'email'=> $email,
    'password' => $password,
    'confirm' => $confirm,
    ];

    $msg = isEmpty($userData);

    if ($msg != 1) {
        redirect('auth-register', $msg, 'danger');
    }

    if ($userData['password'] != $userData['confirm']) {

        redirect('auth-register', "Password does not match.");

    }


    $res = $pdo->select("SELECT * FROM users WHERE username=? or email=?", [$userData['username'], $userData['email'] ])->fetchAll(PDO::FETCH_BOTH);

    if (!empty($res)) {
        foreach ($res as $user) {
            if ($user['email'] == $userData['email']) {
                redirect('register', "Email already exists");
            } elseif ($user['username'] == $userData['username']) {
                redirect('auth-register', "Username already exists");
            }
        }
    }

    $hashedPass = password_hash($userData['password'], PASSWORD_DEFAULT);

    $pdo->insert('INSERT INTO users(username,email, password) VALUES(?,?,?)', [$userData['username'], $userData['email'], $hashedPass]);


       //     $_SESSION['email_verification_required'] = true;
// header('Location: auth-two-steps'); 
// exit;
    if ($pdo->status) {

        // $pdo->update("UPDATE users SET access = 'secured' WHERE email = ?", [ $userData['Email']]);
     

        //send a welcome email to the user
        $welcomeMsg = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Document</title>
</head><body>
<p style="line-height:1.6; text-align:justify">
    <p style="line-height:1.6; text-align:justify">
        We provides humanitarian assistance and also assist in a poverty alleviation program.Enhancement of environmental cleanleness, protection and conservation. provision of healthcare program.  Assist in the educational enhancement in the society. click <a href="services">here</a> to get in touch with us </p>
</p>
</body>
</html>';


        try {
           
            //Recipients
            $mail->setFrom('lilianlynda@gmail.com', 'Egoigwe Support');
            $mail->addAddress($userData['Email']); //Add a recipient
            // $mail->addAddress('ellen@example.com'); //Name is optional
            $mail->addReplyTo('lilianlynda@gmail.com');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Welcome';
            // $mail->Body = "Welcome <b>".$userData['UserName']."</b> <br> You are welcomed to Trifty Blog were gossip and Back-biting are the order of the day";
            $mail->Body = $welcomeMsg;


            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        redirect('auth-login', "registration Successful", 'success');
    }

  

    exit;

}

require_once 'view/guest/auth/auth-register.php';