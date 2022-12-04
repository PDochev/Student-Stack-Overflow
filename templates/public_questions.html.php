<p><?php echo $totalQuestions ?> questions have been submitted to the StudentStackOverflow.</p>

<?php foreach ($question as $questions) : ?>
    <blockquote>
        <img src="uploads/<?php echo htmlspecialchars($questions['image'], ENT_QUOTES, 'UTF-8') ?>" /> <br />
        Date: <?php $displaytime = date("D d M Y", strtotime($questions['questionDate'])) ?> <?php echo htmlspecialchars($displaytime, ENT_QUOTES, 'UTF-8') ?> <br />
        Question: <?php echo htmlspecialchars($questions['questionText'], ENT_QUOTES, 'UTF-8') ?>
        <br />Module: <?php echo htmlspecialchars($questions['moduleName'], ENT_QUOTES, "UTF-8") ?>

        (by <a href="mailto:<?php echo htmlspecialchars($questions['email'], ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($questions['name'], ENT_QUOTES, 'UTF-8'); ?> </a>)

        <!-- <a href="editQuestion.php?id=<?php echo $questions['id'] ?>"> Edit</a> -->




    </blockquote>
<?php endforeach; ?>