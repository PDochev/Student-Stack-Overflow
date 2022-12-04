<?php
require '../adlogin/check.php';
if (isset($_POST['textarea'])) {
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/DataBaseFunctions.php';

        insertQuestion($pdo, $_POST['textarea'], $_FILES['fileToUpload']['name'], $_POST['student'], $_POST['module']);
        header('location:questions.php');
        include '../includes/uploadFile.php';
        header('location:questions.php');
    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error ' . $e->getMessage();
    }
} else {
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    $title = 'Add a new Question';

    $student = allStudents($pdo);
    $module = allModules($pdo);
    ob_start();
    include '../templates/addQuestion.html.php';

    $output = ob_get_clean();
}

include '../templates/admin_layout.html.php';
