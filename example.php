<?php

declare(strict_types=1);

use PHPerKaigi\Coconeri;

require_once __DIR__ . '/vendor/autoload.php';

PHPerKaigi\welcome(
    new ReflectionClass(Coconeri::class)
)->dump(STDOUT);
