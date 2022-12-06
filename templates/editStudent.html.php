</br>
</br>
</br>
</br>

<form style="display:flex;justify-content:center; align-content:center ;flex-flow: column wrap;" action="" method="post">
    <input type="hidden" name="studentid" value="<?php echo $students['id']; ?>">
    <label for="name">Edit your Name here:</label>
    <textarea name="name" cols="40" rows="3" required>
    <?php echo $students['name'] ?>
    </textarea>
    <label for="email">Edit your email here:</label>
    <textarea name="email" cols="40" rows="3" required>
    <?php echo $students['email'] ?>
    </textarea>

    <!-- <input type="submit" name="submit" value="Save"> -->
    <button class="btn-success" type="submit" name="submit">Save</button>
</form>
</form>