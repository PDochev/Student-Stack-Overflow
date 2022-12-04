<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../app.css">
    <title><?php echo $title ?> </title>
</head>

<body>
    <!-- <header> <h1>StudentStackOverflow</h1></header> -->
    <nav>
        <ul>
            <!-- <li><a href="index.php">Home</a></li> -->
            <li><a href="questions.php">Question List</a></li>
            <li><a href="addQuestion.php">Add a new Question</a></li>
            <li><a href="module.php">Manage Modules</a></li>
            <li><a href="students.php">Manage Students</a></li>
            <li><a href="../adlogin/logout.php">Public/Logout</a></li>
        </ul>
    </nav>
    <main><?php echo $output ?> </main>
    <footer>&copy; SSO 2023</footer>
</body>

</html>