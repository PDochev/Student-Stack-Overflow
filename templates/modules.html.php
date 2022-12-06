</br>
</br>
</br>
<h4><?php echo $totalModules ?> modules in the Database.</h4> <br />
<a href="addModule.php"><button class="btn-secondary">Add Module</button></a>
<?php foreach ($module as $modules) : ?>
    <blockquote style="display:flex;justify-content:center; align-content:center ;flex-flow: column wrap;">

        Module: <?php echo htmlspecialchars($modules['moduleName'], ENT_QUOTES, "UTF-8") ?>

        <a class="card-link" href="editModule.php?id=<?php echo $modules['id'] ?>"> Edit</a>

        <form action="deleteModule.php" method="post">
            <input type="hidden" name="id" value="<?php echo $modules['id'] ?>">
            <input type="submit" value="Delete">
        </form>

    </blockquote>
<?php endforeach; ?>