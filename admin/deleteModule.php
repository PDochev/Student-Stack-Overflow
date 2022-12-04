<?php
require '../adlogin/check.php';
try {
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

    deleteModule($pdo, $_POST['id']);
    header('location:module.php');
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
