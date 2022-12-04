<?php
require '../adlogin/check.php';
try {
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

    $row = getQueston($pdo, $_POST['id']);
    unlink('../uploads/' . $row['image']);
    deleteQuestion($pdo, $_POST['id']);
    header('location:questions.php');
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
