<?php
// require_once  APP-ROOT . '/core/model/DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete image details from database
    $pdo->delete("DELETE FROM images WHERE id = ?", [$id]);
}

header('Location: create-post'); // Redirect back to index page
?>
<!-- require_once APP_ROOT . '/view/partials/auth-header.php'?> -->