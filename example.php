<?php
    header('Content-Type: text/html; charset=utf-8');

    require_once('wpslug.class.php');

    $category_title = "D'énergie hybride efficace";

    echo wpslug::get($category_title);