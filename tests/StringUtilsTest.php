<?php

use function StringUtils\capitalize;
use Webmozart\Assert\Assert;

require __DIR__ . '/../vendor/autoload.php';

Assert::eq(capitalize('hello'), 'Hello');

Assert::eq(capitalize(''), '');


echo 'Все тесты пройдены!';
