<?php
require '../adlogin/check.php';
include '../includes/DatabaseConnection.php';
include '../includes/DataBaseFunctions.php';

try {
    if (isset($_POST['questionText'])) {

        updateQuestion($pdo, $_POST['questionid'], $_POST['questionText']);
        header('location: questions.php');
    } else {

        $questions = getQueston($pdo, $_GET['id']);
        $title = "Edit a Question";

        ob_start();
        include '../templates/editQuestion.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'error has occured';
    $output = 'Error editing question: ' .  $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}

include '../templates/admin_layout.html.php';
