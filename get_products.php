<?php

$products = array(
  array(
    'name' => 'Product',
    'description' => 'This is Product ',
    'price' => 100,
    'image' => 'C:\xampp\htdocs\E-Commercewebsite\img\Product.jpg',
  ),
  array(
    'name' => 'Product',
    'description' => 'This is Product .',
    'price' => 150,
    'image' => 'C:\xampp\htdocs\E-Commercewebsite\img\Product.jpg',
  ),
  
);


header('Content-Type: application/json');
echo json_encode($products);
