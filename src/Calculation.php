<?php

namespace Argatu\CargoPuzzle;

class Calculation
{
    public function __construct(
        private array $packages,
        private array $containers,
    ) {}

    /**
     * Calculate the number of containers needed to fit all packages.
     *
     * @return int
     */
    public function calculateContainers(): int
    {
        $usedContainers = 1;

        usort($this->packages, function($a, $b) {
            return $b->volume() <=> $a->volume();
        });

        foreach ($this->packages as $package) {
            $fit = false;

            foreach ($this->containers as $container) {
                if ($container->addPackage($package)) {
                    $fit = true;
                } else {
                    // If the package doesn't fit in the current container, the container is full, and we increase the number of used containers
                    $usedContainers++;
                }
                break;
            }

            if (!$fit) {
                // If no more containers are available, create a new one based on first container dimensions
                $container = new Container(
                    $this->containers[0]->width,
                    $this->containers[0]->height,
                    $this->containers[0]->length
                );
                $container->addPackage($package);
                $this->containers[] = $container;
            }
        }

        return $usedContainers;
    }
}