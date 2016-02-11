<?php include "templates/include/header.php" ?>
<h3>All Articles</h3>
<?php if (isset($results['errorMessage'])) { ?>
  <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
<?php if (isset($results['statusMessage'])) { ?>
  <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>
<table>
  <tr class="tradmin">
    <th class="thadmin">Publication Date</th>
    <th>Article</th>
  </tr>
  <?php foreach ($results['articles'] as $article) { ?>
    <tr class="tradmin" onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
      <td class="tdadmin"><?php echo date('j M Y', $article->publicationDate)?></td>
      <td><?php echo $article->title?></td>
    </tr>
  <?php } ?>
</table>
<p class="indented"><?php echo $results['totalRows']?> article<?php echo ($results['totalRows'] != 1) ? 's' : '' ?> in total.</p>
<p class="indented"><a href="admin.php?action=newArticle">Add a New Article</a></p>
<p class="indented">You are logged in as <b><?php echo htmlspecialchars($_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
<?php include "templates/include/footer.php" ?>