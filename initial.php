<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    include 'connect.php';
    //routes
    $tpl='includes/templates/'; 
    $func= 'includes/functions/'; 
    $css='layouts/css/';
    $js='layouts/js/'; 
    $js='layouts/img/';
    include $func . 'function.php';
    include $tpl .'links.php';
