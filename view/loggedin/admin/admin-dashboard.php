<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="shortcut icon" href="assests/images/logo4.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<style>


.btns{
            background-color: black !important;
            border-radius: 10px !important;
            padding:15px !important
        }
    
        .user{

            animation-name: user !important;
            animation-duration: 2s !important;
            position: relative !important;
        }

        @keyframes user {
            from{left: -500px}
            to{left: 0}
        }


     @media screen and (max-width:400px){
        .offcanvas-header{
            flex-direction: column !important;
            text-align: start !important;
        }

       
    }


   
</style>
<body>
    


<div class="offcanvas-header" style="display:flex; padding:40px; background-color:orangered;  color: white">
          <h2 class="offcanvas-title user" id="offcanvasWithBackdropLabel">Welcome: <?=$currentUser->username?></h2>
        

          <form method="POST">
            <input type="hidden" name="logout">
            
            <button type="submit" class="list-group-item list-group-item-action btns">Logout</button>
        </form>
</div>

<?php
include('view/partials/admin_sidebar.php'); 
?>



</body>
</html>







    
 
