<?php

namespace Argatu\CargoPuzzle;

readonly class Package
{
    public function __construct(
        public float $width,
        public float $height,
        public float $length,
    ) {}

    /**
     * Calculate the volume of the package.
     *
     * @return float
     */
    public function volume(): float
    {
        return $this->width * $this->height * $this->length;
    }
}