<?php

declare(strict_types=1);

namespace PHPerKaigi;

interface Attribute
{
    /**
     * @param resource $out
     */
    public function dump($out): void;
}
