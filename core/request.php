<?php

class Request {
    public static function url() {
        // dd(parse_url($_SERVER['REQUEST_URI']));

        return trim($_SERVER['REQUEST_URI'],'/');
    }
}