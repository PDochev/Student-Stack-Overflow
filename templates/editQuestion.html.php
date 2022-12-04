<form action="" method="post">
    <input type="hidden" name="questionid" value="<?php echo $questions['id']; ?>">
    <label for="questionText">Edit your question here:</label>
    <textarea name="questionText" cols="40" rows="3" required>
    <?php echo $questions['questionText'] ?>
</textarea>
    <input type="submit" name="submit" value="Save">
</form>