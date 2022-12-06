<form style="margin-top: 150px;display:flex;justify-content:center; align-content:center ;flex-flow: column wrap;" action="" method="post" enctype="multipart/form-data">
    <label for="questionText">Type your question here:</label>
    <textarea name="textarea" cols="40" rows="5" required></textarea>
    </br>
    <input type="file" name="fileToUpload">

    <select name="student" required>
        <option value="">Select a Student</option>
        <?php foreach ($student as $students) : ?>
            <option value="<?php echo htmlspecialchars($students['id'], ENT_QUOTES, "UTF-8"); ?>">
                <?php echo htmlspecialchars($students['name'], ENT_QUOTES, "UTF-8"); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <select name="module" required>
        <option value="">Select a Module</option>
        <?php foreach ($module as $modules) : ?>
            <option value="<?php echo htmlspecialchars($modules['id'], ENT_QUOTES, "UTF-8"); ?>">
                <?php echo htmlspecialchars($modules['moduleName'], ENT_QUOTES, "UTF-8"); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button class="btn-success" type="submit" name="submit">Add</button>
    <!-- <input type="submit" name="submit" value="ADD"> -->
</form>