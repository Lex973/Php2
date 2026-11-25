<?php

use App\Models\Product;
use App\Services\PriceFormatter;

spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    if (str_starts_with($class, $prefix)) {
        $relative = substr($class, strlen($prefix));
        $path = __DIR__ . '/src/' . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($path)) {
            require $path;
        }
    }
});

$product = new Product('Наушники', 1250.50);
echo $product->title . ': ' . PriceFormatter::format($product->price) . PHP_EOL;
