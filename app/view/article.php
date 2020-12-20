<?php
require "layout/head.php";
?>
   <h1>Article Page</h1>
   <table border="1">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <!-- <th>Published?</th> -->
    </tr>
    <?php foreach($articles as $article) { ?>
    <tr>
        <td><?= $article->id ?></td>
        <td><?= $article->title ?></td>
        <td><?= $article->body ?></td>
    </tr>
    <?php } ?>
    </table>

<?php
require "layout/foot.php";
?>
