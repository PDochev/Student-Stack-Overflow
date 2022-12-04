<?php
require '../adlogin/check.php';
if (isset($_POST['name']) && $_POST['email']) {
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/DataBaseFunctions.php';

        insertStudent($pdo, $_POST['name'], $_POST['email']);

        header('location: students.php');
    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    $title = 'Add a new student';
    ob_start();
    include '../templates/addStudent.html.php';
    $output = ob_get_clean();
}
include '../templates/admin_layout.html.php';
