<?php
include_once 'Models/Product.php';
include_once 'Services/ProductManager.php';

use Models\Product;
use Services\ProductManager;

$product_manager = new ProductManager();
$product_manager->add(new Product('Laptop'));
$product_manager->add(new Product('Mobile'));

$products = $product_manager->getProducts();
foreach ($products as $product) {
    echo $product->getname() . '<br>';
}