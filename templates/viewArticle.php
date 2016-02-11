<?php include "templates/include/header.php" ?>
<h3><?php echo htmlspecialchars($results['article']->title)?></h3>
<div class="articletext"><?php echo $results['article']->content?></div>
<p class="pubDate1">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>
<?php include "templates/include/footer.php" ?>