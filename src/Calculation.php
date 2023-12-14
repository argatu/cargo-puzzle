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
     * @return array
     */
    public function calculateContainers(): array
    {
        $totalPackageVolume = 0;
        foreach ($this->packages as $package) {
            $totalPackageVolume += $package->volume();
        }

        $totalContainerVolume = 0;
        $containerCounts = [];
        foreach ($this->containers as $container) {
            while ($totalContainerVolume + $container->volume() <= $totalPackageVolume) {
                $totalContainerVolume += $container->volume();
                $containerCounts[get_class($container)] = ($containerCounts[get_class($container)] ?? 0) + 1;
            }
        }

        if (empty($containerCounts)) {
            $containerCounts[get_class($this->containers[0])] = 1;
        }

        return $containerCounts;
    }
}