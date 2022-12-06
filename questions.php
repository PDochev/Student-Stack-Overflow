<?php
// session_start();
try {
    include 'includes/DatabaseConnection.php';
    include 'includes/DataBaseFunctions.php';

    $question = allQuestions($pdo);
    $title = "Questions List";
    $totalQuestions = totalQuestions($pdo);

    ob_start();
    include 'templates/public_questions.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = "An error has occured";
    $output = "Database error " . $e->getMessage();
}
include 'templates/layout.html.php';
