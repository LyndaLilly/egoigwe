<?php require 'view/partials/header.php' ?>

<style>

a {
    color: #262626;
    text-decoration: none !important;
}

.delete-btn{
    background-color:tomato;
    color: white;
    border-radius: 10px;
    padding:10px;
    

}
</style>
<body class="single-page portfolio">

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-12">
<h1>Portfolio</h1>
</div>
</div>
</div>
</div>

<div class="portfolio-wrap">
<div class="container">
<div class="row portfolio-container">

<?php

// Fetch uploaded images and their descriptions from the database
$isIndexPage = isset($isIndexPage) ? $isIndexPage : false;
$images = $pdo->select("SELECT * FROM images");



if (!empty($images)) {
    foreach ($images as $image) {
        echo "<div class='col-12 col-md-6 col-lg-4 portfolio-item'>";
        echo "<div class='portfolio-cont'>";
        if (isset($image['name'])) {
            // Display the image
            echo "<img src='data:image/jpeg;base64," . base64_encode($image['data']) . "' alt='Uploaded Image'><br>";
        } else {
            echo "Image not found<br>";
        }
        // Display the description
        echo "<h3 class='entry-title'><a href='#'>{$image['description']}</a></h3>";

        // Display delete link only if it's the index page
  
        if ($isIndexPage) {
            echo "<a class='delete-btn' href='delete?id={$image['id']}'>Delete</a>";
        }
        echo "</div>";
        echo "</div>";
    }

    
} else {
    echo "No images uploaded.";
}
?>

</div>
</div>
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center mt-72">
<a href="#" class="btn gradient-bg load-more-btn">Load More</a>
</div>
</div>
</div>
</div>
<?php require 'view/partials/footer.php' ?>
