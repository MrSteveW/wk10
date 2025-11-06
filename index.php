<?php
$biscuits = [
    [
        'id' => 1,
        'biscuit_name' => 'Garibaldi',
        'gluten_free' => false,
        'sugar_free' => false,
        'stock' => 100,
        'pack_size' => 20,
        'sale_price' => 2,
        'prod_cost' => 1,
        'prod_time' => 2
    ],
    [
        'id' => 2,
        'biscuit_name' => 'Digestive',
        'gluten_free' => true,
        'sugar_free' => false,
        'stock' => 280,
        'pack_size' => 10,
        'sale_price' => 3,
        'prod_cost' => 1.5,
        'prod_time' => 3
    ],
    [
        'id' => 3,
        'biscuit_name' => 'Rich Tea',
        'gluten_free' => false,
        'sugar_free' => true,
        'stock' => 60,
        'pack_size' => 15,
        'sale_price' => 1.5,
        'prod_cost' => 0.8,
        'prod_time' => 1.5
    ],
    [
        'id' => 4,
        'biscuit_name' => 'Hobnob',
        'gluten_free' => true,
        'sugar_free' => false,
        'stock' => 490,
        'pack_size' => 12,
        'sale_price' => 2.5,
        'prod_cost' => 1.2,
        'prod_time' => 2.5
    ]
];

$stockFilter = isset($_GET['stock_filter']) ? (int)$_GET['stock_filter'] : 0;

    $filteredBiscuits = array_filter($biscuits, function($biscuit) use ($stockFilter){
        return $biscuit['stock'] >= $stockFilter;
    });

require "index.view.php";