<?php

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$employees = [
    new Manager('Иван', 50000),
    new Developer('Анна', 60000, 3),
    new Manager('Олег', 2000),
    new Developer('Мария', 45000, 1)
];

$total = 0;
foreach ($employees as $employee) {
    echo $employee->getInfo() . PHP_EOL;
    $total += $employee->getSalary() + $employee->calculateBonus();
}

echo 'Общая сумма выплат: ' . $total . ' руб.' . PHP_EOL;
echo 'Количество сотрудников: ' . Employee::getEmployeeCount() . PHP_EOL;
