<?php
Class Connection {

    public function make($config)
    {
        $host = $config['host'];
        $db = $config['dbname'];

        try{
            return new PDO(
                "mysql:host=$host;dbname=$db", $config['username'], $config['password']
            );
        } catch(Exception $e){
            echo  $e->getMessage();
            // echo  "Connection Lost";die();
        }
    }
}