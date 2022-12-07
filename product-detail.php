<?php
require_once 'core/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product = get_all_products($_GET['id']);
    include_once './view/_product-detail.php';
}