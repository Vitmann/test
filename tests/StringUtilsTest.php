<?php

use function StringUtils\capitalize;
require __DIR__ . '/../vendor/autoload.php';

if (capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!' . PHP_EOL);
}

if (capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!' . PHP_EOL);
}

echo 'Все тесты пройдены!';
