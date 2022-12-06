</br>
</br>
</br>
<h4><?php echo $totalQuestions ?> questions have been submitted to the StudentStackOverflow.</h4>


<?php foreach ($question as $questions) : ?>
    <blockquote>


        <div class="card" style="width: 30rem; margin:auto">
            <img src="../uploads/<?php echo htmlspecialchars($questions['image'], ENT_QUOTES, 'UTF-8') ?>" alt="Card example image">

            <div class="card-body">
                <h4 class="card-title">Question:</h4>
                <h5 class="card-subtitle">By <?php echo htmlspecialchars($questions['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($questions['questionText'], ENT_QUOTES, 'UTF-8') ?></p>
                <button><?php echo htmlspecialchars($questions['moduleName'], ENT_QUOTES, "UTF-8") ?></button>
                <button><?php $displaytime = date("D d M Y", strtotime($questions['questionDate'])) ?> <?php echo htmlspecialchars($displaytime, ENT_QUOTES, 'UTF-8') ?></button>
                <a class="card-link" href="editQuestion.php?id=<?php echo $questions['id'] ?>"><button class="btn-secondary">Edit</button></a>
                </br>
                </br>
                <form action="deleteQuestion.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $questions['id'] ?>">
                    <button type="submit" class="btn-danger">Delete</button>
                </form>
            </div>











            <!-- <form action="deleteQuestion.php" method="post">
                <input type="hidden" name="id" value="<?php echo $questions['id'] ?>">
                <input type="submit" value="Delete">
            </form> -->

    </blockquote>
<?php endforeach; ?>