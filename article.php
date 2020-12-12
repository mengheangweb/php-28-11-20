<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>Title</th>
        <th>Body</th>
        <!-- <th>Published?</th> -->
    </tr>
    <?php foreach($articles as $articles) { ?>
    <tr>
        <td><?= $articles->title ?></td>
        <td><?= $articles->body ?></td>
        <!-- <td><?= $articles->isPublished() ?></td> -->
    </tr>
    <?php } ?>
    </table>
</body>
</html>