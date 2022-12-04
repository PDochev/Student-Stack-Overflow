<p><?php echo $totalModules ?> modules in the Database.</p> <br />
<p><a href="addModule.php">Add a New Module</a></p>
<?php foreach ($module as $modules) : ?>
    <blockquote>

        Module: <?php echo htmlspecialchars($modules['moduleName'], ENT_QUOTES, "UTF-8") ?>

        <a href="editModule.php?id=<?php echo $modules['id'] ?>"> Edit</a>

        <form action="deleteModule.php" method="post">
            <input type="hidden" name="id" value="<?php echo $modules['id'] ?>">
            <input type="submit" value="Delete">
        </form>

    </blockquote>
<?php endforeach; ?>