<?php

namespace Argatu\CargoPuzzle;

class Container
{
    public function __construct(
        public readonly float $width,
        public readonly float $height,
        public readonly float $length
    ) {}

    public function volume(): float
    {
        return $this->width * $this->height * $this->length;
    }
}