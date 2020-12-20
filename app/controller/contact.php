<?php
namespace App\Controller;

class Contact {
    public function index()
    {
        return view('contact');
    }

    public function add()
    {
        $query = App::get('con')->prepare('insert into contacts (name,message) values (:name, :message)');

        $query->execute([
            'name' => $_POST['fullname'],
            'message' => $_POST['body'],
        ]);

        return view('contact');
    }

}


