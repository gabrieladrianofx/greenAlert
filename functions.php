<?php

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    require "views/template/app.php";
}

function abort($code)
{
    http_response_code($code);
    view($code);
    die();
}

function config($chave = null)
{
    $config = require 'config.php';

    if (strlen($chave) > 0) {
        return $config[$chave];
    }

    return $config;
}

function flash()
{
    return new Flash;
}

function dd(...$dump)
{
    dump($dump);
    exit();
}

function dump(...$dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
}

function auth() {
    if(! isset($_SESSION['auth'])){
        return null;
    }

    return $_SESSION['auth'];
}