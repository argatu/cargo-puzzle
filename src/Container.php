<?php

namespace Argatu\CargoPuzzle;

class Container
{
    public function __construct(
        public readonly float $width,
        public readonly float $height,
        public readonly float $length,
        public float $availableSpace = 0.0,
    ) {
        $this->availableSpace = $this->width * $this->height * $this->length;
    }

    /**
     * Add a package to the container and update the available space.
     *
     * @param Package $package
     * @return bool
     */
    public function addPackage(Package $package): bool
    {
        if ($this->availableSpace >= $package->volume()) {
            $this->availableSpace -= $package->volume();
            return true;
        }

        return false;
    }
}