<?php
  include('view/partials/admin-header.php'); 



 $contacts = $pdo->select("SELECT * FROM contacts")->fetchAll(PDO::FETCH_BOTH);
 
 ?>
 
<title>User || Panel</title>

    <style>

    table,td,th{
    border-bottom:1px solid grey;
    border-collapse: collapse;
    padding:20px
    }

    table{
    margin:auto;
    width: 50%
    
    }
    
  @media screen and (max-width:400px){
 
    table{
        width:30%;
    }
  
   
}


@media screen and (max-width:200px){
     {
   
    }

    </style>
</head>

<body>

<h1 style="text-align:center; margin-top:40px;">Manage user</h1>
 
    <div
        class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            
            <tbody>
            <?php foreach($contacts as $key => $contact): ?>
        <tr>
            <td> <?php echo $key + 1; ?></td>
            <td> <?php echo $contact['name']; ?></td>

            <td> <?php echo $contact['email']; ?></td>

            <td> <?php echo $contact['message']; ?></td>
      

        </tr>

        <?php endforeach; ?>

            </tbody>
        </table>
    </div>


</body>

</html>

<?php require 'view/partials/footer.php' ?>



