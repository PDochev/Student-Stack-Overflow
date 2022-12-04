<form action="" method="post">
    <input type="hidden" name="moduleid" value="<?php echo $modules['id']; ?>">
    <label for="moduleName">Edit your module here:</label>
    <textarea name="moduleName" cols="40" rows="3" required>
    <?php echo $modules['moduleName'] ?>
</textarea>
    <input type="submit" name="submit" value="Save">
</form>