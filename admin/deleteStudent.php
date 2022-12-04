<?php
require '../adlogin/check.php';
try {
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

    deleteStudent($pdo, $_POST['id']);

    header('location:students.php');
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
