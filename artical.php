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
        <th>Published?</th>
    </tr>
    <tr>
        <td><?= $artical->title ?></td>
        <td><?= $artical->body ?></td>
        <td><?= $artical->isPublished() ?></td>
    </tr>
    </table>
</body>
</html>