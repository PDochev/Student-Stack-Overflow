</br>
</br>
</br>
<h4><?php echo $totalStudents ?> students in the Database.</h4> <br />
<p><a href="addStudent.php">Add a New Student</a></p>
<?php foreach ($student as $students) : ?>
    <blockquote>

        Student: <?php echo htmlspecialchars($students['name'], ENT_QUOTES, "UTF-8") ?> <br />
        Email: <?php echo htmlspecialchars($students['email'], ENT_QUOTES, "UTF-8") ?>

        <a href="editStudent.php?id=<?php echo $students['id'] ?>"> Edit</a>

        <form action="deleteStudent.php" method="post">
            <input type="hidden" name="id" value="<?php echo $students['id'] ?>">
            <input type="submit" value="Delete">
        </form>

    </blockquote>
<?php endforeach; ?>