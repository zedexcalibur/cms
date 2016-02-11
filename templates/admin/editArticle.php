<?php include "templates/include/header.php" ?>
<p class="indented">You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
<h3><?php echo $results['pageTitle']?></h3>
<form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
  <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>
  <?php if (isset($results['errorMessage'])) { ?>
      <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
  <?php } ?>
  <ul>
    <li>
      <label>Article Title</label>
      <br><input type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars($results['article']->title)?>" />
    </li>
    <li>
      <label>Article Content</label>
      <br><textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="100000" style="height: 30em;"><?php echo $results['article']->content ?></textarea>
    </li>
    <li>
      <label>Publication Date</label>
      <br><input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date("Y-m-d", $results['article']->publicationDate) : "" ?>" />
    </li>
  </ul>
  <div class="buttons">
    <input type="submit" name="saveChanges" value="Save Changes" />
    <input type="submit" formnovalidate name="cancel" value="Cancel" />
  </div>
</form>
<?php if ($results['article']->id) { ?>
  <p class="indented"><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete this article?')">Delete this article</a></p>
<?php } ?>
<?php include "templates/include/footer.php" ?>