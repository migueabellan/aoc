# [WIP] Advent Of Code - Library

![Github](https://github.com/migueabellan/aoc/workflows/Test/badge.svg)
![Advent Of Code](https://img.shields.io/badge/Advent%20Of%20Code-library-orange?style=flat-square)
![php](https://img.shields.io/github/languages/top/migueabellan/aoc?style=flat-square)

# Table of Contents

- [Installation](#installation)
- [Basic Usage](#basic-usage)
- [Advanced Usage](#advanced-usage)
- [Utils](#utils)

## Installation

```sh
composer require migueabellan/aoc
```

## Basic Usage

Create a `.env.local` file to make environment variables.

```
# DO NOT COMMITTED THIS FILE

SESSION_AOC=your_cookie_session
```

### Autoloading

Supports `PSR-4` autoloaders.

```php
<?php

// When installed via composer
require_once 'vendor/autoload.php';

use Aoc\Client;

$client = new Client();

// Retrieve input by year and day
$input = $client->getInputBy(2020, 23);

echo $input; // 543769257...
```

## Advanced Usage

```php
<?php

use Aoc\Puzzle\AbstractPuzzle;

class Puzzle extends AbstractPuzzle
{
    public function exec1(array $input = []): int|string
    {
        $result = 0;

        // ...

        return (string)$result;
    }

    public function exec2(array $input = []): int|string
    {
        $result = 0;

        // ...

        return (string)$result;
    }
}
```

## Utils

```php
<?php

use Aoc\Utils;

$array = [0, 1, 2];

$permutations = ArrayUtil::permutations($array);

print_r($permutations); // [[0, 1, 2], [0, 2, 1], [2, 1, 0] ...]
```