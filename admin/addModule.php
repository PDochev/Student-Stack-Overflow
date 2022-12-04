<?php
require '../adlogin/check.php';
if (isset($_POST['mod'])) {
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/DataBaseFunctions.php';

        insertModule($pdo, $_POST['mod']);
        header('location: module.php');
    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    $title = 'Add a new module';
    ob_start();
    include '../templates/addModule.html.php';
    $output = ob_get_clean();
}
include '../templates/admin_layout.html.php';
