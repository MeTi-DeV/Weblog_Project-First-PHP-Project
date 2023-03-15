<?php
// config
define('BASE_URL', 'http://localhost/Weblog_Project-First-PHP-Project/');
function redirect($url)
{
    header('Location: ' . trim(BASE_URL, '/ ') . '/' . trim($url, '/ '));
    exit;
}
// redirect('panel/category');
function asset($file)
{
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ ');
}
// <img src="asset(assets/images/mehdi.png)">
// <link href="asset(assets/style/style.css)">

function url($url)
{
    return trim(BASE_URL, '/ ') . '/' . trim($url, '/ ');
}
// echo url('panel/category');
function dd($var)
{
    echo '<pre>';
    var_dump($var);
    exit;
}
// $users = ['mehdi', 'mohsen', 'hossein'];
// dd($users);
?>