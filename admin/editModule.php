<?php
require '../adlogin/check.php';
include '../includes/DatabaseConnection.php';
include '../includes/DataBaseFunctions.php';

try {
    if (isset($_POST['moduleName'])) {
        updateModule($pdo, $_POST['moduleid'], $_POST['moduleName']);
        header('location:module.php');
    } else {
        $modules = getModules($pdo, $_GET['id']);
        $title = "Edit Modules";

        ob_start();
        include '../templates/editModule.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'error has occured';
    $output = 'Error editing module: ' . $e->getMessage();
}

include '../templates/admin_layout.html.php';
