# CargoPuzzleMaster

Welcome to CargoPuzzleMaster, the ultimate solution for optimizing container space and minimizing
transportation costs. With our innovative application, calculating the most efficient distribution of cargo
has never been easier. Whether you're a logistics professional, a shipping company, or a business owner,
our tool will help you determine the optimal number of containers required to transport your goods
while utilizing as little space as possible. Be the first and sign up to our beta!

## Assigment

A potential customer has asked us for a demonstration of our calculation process. They told us they have
rectangle shaped packages consisting of a variable width, height, and length.
For this demonstration we need a fast PHP 8.2 script that uses a hand full of files that find a good
solution to fit all packages in as few containers as possible.
For this demo, we have two types of sea containers available:
- 40ft Standard Dry Container
  Inner dimension: Width: 234.8 cm, Height: 238.44 cm, Length: 1203.1 cm
- 10ft Standard Dry Container
  Inner dimension: Width: 234.8 cm, Height: 238.44 cm, Length: 279.4 cm
  Note that due to it being a demo, we do not want to depend on any external packages. We need a
  native PHP (8.2) implementation

## Requirements
- PHP ^8.2

## Usage
```bash
composer install

php index.php
```