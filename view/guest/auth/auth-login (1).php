
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assests/css/form.css">
    <link rel="shortcut icon" href="assests/images/reallogo.jpg" type="image/x-icon">
</head>



<style>
    a {
    color: #262626;
    text-decoration: none !important;
}
</style>
<body>
<div class="login-form-container">
<div style="width: 40rem; margin: auto;  display: flex; justify-content: center; align-items: center; margin-top: 40px; margin-bottom: 30px">
         <image style="width:80px;" src="assests/images/reallogo.jpg" alt="logo" />
</div>


<form  method="POST" action="">

    <?php if (isset($_GET['error'])): ?>
      
    <div style=""
        class="alert alert-<?=$_GET['type']?> alert-dismissible fade show"
        role="alert"
    >
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
        <strong><?=$_GET['error']?></strong> 
    </div>
    


    <?php endif;?>

   

    <h3>Login</h3>
    <p>Email Address</p>
    <input type="email" class="box" placeholder="enter your email" name="email">
    
    <p>Password</p>
    <input type="password" class="box" placeholder="enter your password" name="password">

    <input type="hidden" name="login">

    <input type="submit" value="login now" class="btn">
    
</form>

</div>
</body>
</html>