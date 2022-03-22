<?php

declare(strict_types=1);

namespace PHPerKaigi;

use Attribute;
use PHPerKaigi\Attribute as PHPerKaigiAttribute;
use function debug_backtrace;
use function fwrite;

#[Attribute(Attribute::TARGET_CLASS)]
#[\Spiral\Attributes\NamedArgumentConstructor]
class Welcome implements PHPerKaigiAttribute
{
    private string $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function dump($out): void
    {
        fwrite($out, "Location: {$this->location}\n");
    }
}
