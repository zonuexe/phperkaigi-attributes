<?php

declare(strict_types=1);

namespace PHPerKaigi;

use PHPerKaigi\Attribute;
use ReflectionClass;
use Reflector;
use RuntimeException;
use Spiral\Attributes\AttributeReader;

/**
 *
 */
function welcome(Reflector $reflection): Attribute
{
    if ($reflection instanceof ReflectionClass) {
        $attributes = reader()->getClassMetadata($reflection, Attribute::class);
    }

    foreach ($attributes as $attr) {
        return $attr;
    }

    throw new RuntimeException();
}

function reader(): AttributeReader
{
    static $reader;
    return $reader ??= new AttributeReader();
}
