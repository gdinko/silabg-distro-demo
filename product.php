<?php
header("Content-Type: text/html; charset=utf-8");

require('vendor/autoload.php');

use SilaBgDistro\Product;

define('API_TOKEN', '');

$product = new Product(API_TOKEN);

try {

    $productList = $product->getList();
    print_r($productList);

    // $productDetail = $product->getDetail(null);
    // print_r($productDetail);

} catch (\Exception $e) {
    echo $e->getCode();
    echo $e->getMessage();
}
