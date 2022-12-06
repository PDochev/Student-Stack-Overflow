</br>
</br>
</br>

<form style="display:flex;justify-content:center; align-content:center ;flex-flow: column wrap;" action="" method="post">
    <input type="hidden" name="questionid" value="<?php echo $questions['id']; ?>">
    <label for="questionText">
        <h4>Edit your quetion here:</h4>
    </label>
    <textarea name="questionText" cols="70" rows="10" required>
    <?php echo $questions['questionText'] ?>
    </textarea>
    <!-- <input type="submit" name="submit" value="Save"> -->
    <button class="btn-success" type="submit" name="submit">Save</button>
</form>



<!-- style="display:flex;justify-content:center; align-content:center" -->