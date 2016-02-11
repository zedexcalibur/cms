<?php include "templates/include/header.php" ?>
<h3>Article Archive</h3>
<ul id="headlines" class="archive">
  <li>
    <h2>
      <table>
        <?php foreach ($results['articles'] as $article) { ?>
          <tr>
            <td class="indextd1b" valign="top">
              <?php echo date('j F Y', $article->publicationDate)?>
            </td>
            <td class="indextd2" valign="top">
              <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars($article->title)?></a>
            </td>
          </tr>
          <tr>
            <td></td>
            <td class="indextd3"><?php echo substr($article->content,0,300)?>...</td>
          </tr>
        <?php } ?>
      </table>
    </h2>
  </li>
</ul>
<p class="bitindented"><?php echo $results['totalRows']?> article<?php echo ($results['totalRows'] != 1) ? 's' : '' ?> in total.</p>
<?php include "templates/include/footer.php" ?>