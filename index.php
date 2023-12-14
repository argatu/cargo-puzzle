<?php

require __DIR__ . '/vendor/autoload.php';

use Argatu\CargoPuzzle\Calculation;
use Argatu\CargoPuzzle\Container;
use Argatu\CargoPuzzle\Package;

$firstPackages = [
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93),
    new Package(78, 79, 93)
];

$secondPackages = [
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(30, 60, 90),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200),
    new Package(75, 100, 200)
];

$thirdPackages = [
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(80, 100, 200),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150),
    new Package(60  , 80, 150)
];

$containers = [
    new Container(234.8, 238.44, 1203.1),  // 40ft Standard Dry Container
    new Container(234.8, 238.44, 279.4)    // 10ft Standard Dry Container
];

$transports = [
    'Transport 1' => $firstPackages,
    'Transport 2' => $secondPackages,
    'Transport 3' => $thirdPackages
];

foreach ($transports as $name => $packages) {
    $containerCounts = (new Calculation($packages, $containers))->calculateContainers();

    foreach ($containerCounts as $count) {
        echo $name . " needs " . $count . " containers\n";
    }
}
