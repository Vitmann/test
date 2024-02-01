<?php
require __DIR__ . '/../vendor/autoload.php';

use Webmozart\Assert\Assert;


if (get(['hello' => 'world'], 'hello') !== 'world') {
    throw new \Exception('Функция работает неверно!');
}

if (get(['hello' => 'world'], 'bye') !== null) {
    throw new \Exception('Функция работает неверно!');
}

if (get(['hello' => 'world'], 'hello', 'kitty') !== 'world') {
    throw new \Exception('Функция работает неверно!');
}