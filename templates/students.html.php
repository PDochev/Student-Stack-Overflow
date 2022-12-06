</br>
</br>
</br>
<h4 style="margin-left: 20px;"><?php echo $totalStudents ?> students in the Database.</h4> <br />
<p style="display:flex;justify-content:center; align-content:center ;flex-flow: column wrap;"><a href="addStudent.php"><button class="btn-success">Add a new Student</button></a></p>
<?php foreach ($student as $students) : ?>
    <blockquote style="display:flex;justify-content:center; align-content:center ;flex-flow: column wrap;">

        <h5> Student: <?php echo htmlspecialchars($students['name'], ENT_QUOTES, "UTF-8") ?> </h5>
        <h5>Email: <?php echo htmlspecialchars($students['email'], ENT_QUOTES, "UTF-8") ?></h5>

        <div><a href="editStudent.php?id=<?php echo $students['id'] ?>"> <button class="btn-secondary">Edit</button></a></div>

        <form action="deleteStudent.php" method="post">
            <input type="hidden" name="id" value="<?php echo $students['id'] ?>">

            <button type="submit" class="btn-danger">Delete</button>
        </form>

    </blockquote>
<?php endforeach; ?>