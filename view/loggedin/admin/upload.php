<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $image = $_FILES['image'];
    $description = $_POST['description'];

    // Check if image is uploaded without errors
    if ($image['error'] == 0) {
        $name = $image['name'];
        $size = $image['size'];
        $type = $image['type'];
        $data = file_get_contents($image['tmp_name']);

        // Insert image details into database
        $pdo->insert("INSERT INTO images (name, size, type, description, data) VALUES (?, ?, ?, ?, ?)", [$name, $size, $type, $description, $data]);
    }
}

header('Location: create-post'); // Redirect back to index page
?>