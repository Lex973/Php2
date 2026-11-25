<?php

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$user = new User('Иван', 'ivan@example.com');
$product1 = new Product('Книга', 500);
$product2 = new Product('Ручка', 50);
$order = new Order($user, [$product1, $product2]);

echo $user->getInfo() . PHP_EOL;
echo 'Сумма заказа: ' . $order->getTotal() . ' руб.' . PHP_EOL;
