<?php 

function dd($value)
{
    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die;
}

function view($name, $data = [])
{
    extract($data);

    return require "app/view/{$name}.php";
}

