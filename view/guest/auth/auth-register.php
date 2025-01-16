<?php require 'view/partials/header.php';


// define('ADMIN || REGISTER', REGISTER_);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin || register</title>

    <link rel="stylesheet" href="assests/css/form.css">

    <style>

a {
    color: #262626;
    text-decoration: none !important;
}
    </style>
</head>
<body>
<div class="login-form-container">


<form method="POST" action="" >
    
<?php if (isset($_GET['error'])): ?>
      
      <div style=""
          class="alert alert-<?=$_GET['type']?> alert-dismissible fade show"
          role="alert">
          <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"></button>
          <strong><?=$_GET['error']?></strong> 
      </div>
      
      <?php endif;?>
            
    <h3>Register</h3>
    <input type="text" class="box" placeholder="enter your username" name="username">

    <input type="hidden" name="register">

    <input type="email" class="box" placeholder="enter your email" name="email">
    <input type="password" class="box" placeholder="enter your password" name="password">
    <input type="password" class="box" placeholder="enter your password" name="confirm">

    <input type="submit" value="register now" class="btn">
    <p>have an account? <a style="font-size:20px" href="auth-login">Login now</a></p>
</form>

</div>
</body>
</html>

<?php require 'view/partials/footer.php'?>