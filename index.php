<?php 

require 'App/User.php';
require 'Database/Model/ProductModel.php';
require 'vendor/autoload.php';

$user = new App\User();
echo $user->getName(); 
echo "\n";
$product = new Database\Model\ProductModel();
echo $product->getId(); 