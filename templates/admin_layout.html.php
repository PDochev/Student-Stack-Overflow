<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.9.0/dist/paper.min.css" />


    <title><?php echo $title ?> </title>
</head>

<body>



    <nav class="border fixed split-nav">
        <div class="nav-brand">
            <h3><a href="index.php">StudentStackOverflow</a></h3>
        </div>
        <div class="collapsible">
            <input id="collapsible1" type="checkbox" name="collapsible1">
            <label for="collapsible1">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </label>
            <div class="collapsible-body">
                <ul class="inline">
                    <li><a href="questions.php">Question List</a></li>
                    <li><a href="addQuestion.php">Add a new Question</a></li>
                    <li><a href="module.php">Manage Modules</a></li>
                    <li><a href="students.php">Manage Students</a></li>
                    <li><a href="../adlogin/logout.php">Public/Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main><?php echo $output ?> </main>
    <!-- <footer>&copy; SSO 2023</footer> -->
</body>

</html>