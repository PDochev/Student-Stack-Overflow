<?php
require '../adlogin/check.php';
include '../includes/DatabaseConnection.php';
include '../includes/DataBaseFunctions.php';

try {
    if (isset($_POST['name']) && $_POST['email']) {
        updateStudent($pdo, $_POST['studentid'], $_POST['name'], $_POST['email']);

        header('location:students.php');
    } else {
        $students =  getStudents($pdo, $_GET['id']);

        $title = "Edit Students";

        ob_start();
        include '../templates/editStudent.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'error has occured';
    $output = 'Error editing module: ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
