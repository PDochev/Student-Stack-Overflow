</br>
</br>
</br>

<h4 style="margin-left: 20px;"><?php echo $totalModules ?> modules in the Database.</h4> <br />


<p style="display:flex;justify-content:center; align-content:center ;flex-flow: column wrap;"><a href="addModule.php"><button class="btn-success">Add Module</button></a></p>
<?php foreach ($module as $modules) : ?>
    <blockquote style="display:flex;justify-content:center; align-content:center ;flex-flow: column wrap;">

        <h5> Module: <?php echo htmlspecialchars($modules['moduleName'], ENT_QUOTES, "UTF-8") ?></h5>

        <div><a href="editModule.php?id=<?php echo $modules['id'] ?>"> <button class="btn-secondary">Edit</button> </a></div>

        <form action="deleteModule.php" method="post">
            <input type="hidden" name="id" value="<?php echo $modules['id'] ?>">
            <!-- <input type="submit" value="Delete"> -->
            <button type="submit" class="btn-danger">Delete</button>
        </form>

    </blockquote>

<?php endforeach; ?>