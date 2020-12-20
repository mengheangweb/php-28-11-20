<?php

$query = App::get('con')->prepare('insert into contacts (name,message) values (:name, :message)');

$query->execute([
    'name' => $_POST['fullname'],
    'message' => $_POST['body'],
]);

header('Location: /contact');

