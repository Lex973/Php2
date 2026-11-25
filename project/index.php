<?php

use App\Product;
use App\Book;
use App\Electronics;

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

$catalog = [
    new Book('PHP для начинающих', 500),
    new Book('Алгоритмы', 1000),
    new Electronics('Наушники', 2000, 10),
    new Electronics('Клавиатура', 3000, 5)
];

$total = 0;
foreach ($catalog as $product) {
    echo $product->getInfo() . PHP_EOL;
    $total += $product->getFinalPrice();
}

echo 'Сумма конечных цен: ' . number_format($total, 2, '.', ' ') . ' руб.' . PHP_EOL;
echo 'Количество товаров: ' . Product::getCount() . PHP_EOL;
