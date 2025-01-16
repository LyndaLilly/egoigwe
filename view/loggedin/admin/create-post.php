<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create || Post</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<style>
        
        .image .delete-btn {
            display: inline-block;
            padding: 5px 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .image .delete-btn:hover {
            background-color: #c82333;
        }

        .image .delete-btn:focus {
            outline: none;
        }

        .image .delete-btn:active {
            transform: translateY(1px);
        }
    </style>

    <h2>Upload Image</h2>
    <a class="btn btn-primary" href="admin-dashboard" role="button">Back to dashboard</a>
    
    <div class="container">
  
    
    <form action="upload" method="post" enctype="multipart/form-data">

    <div style="display: flex; flex-direction:column; margin-top:40px">
    <input type="file" name="image" accept="image/*" required>

<!-- Replace the input field with a textarea -->

<textarea style="resize:none; margin-bottom: 30px" cols="40" rows="10" name="description" placeholder="Description of the image"></textarea>

<button type="submit">Upload</button>
</div>

       

    </form>
    <hr>
    <h2>Uploaded Images</h2>
    <div class="images">
        <?php
        // Set a flag to identify the current page
        $isIndexPage = true;
        include 'view.gallery.php';
        
        ?>
    </div>

    </div>
</body>
</html>