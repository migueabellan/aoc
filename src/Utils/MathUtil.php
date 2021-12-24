<?php

namespace Aoc\Utils;

class MathUtil
{
    /**
     * Return divisor
     */
    public static function divisors(int $number): array
    {
        $divisors = [];

        $sqrt = sqrt($number);

        for ($i = 1; $i <= $sqrt; $i++) {
            if ($number % $i === 0) {
                $divisors[] = $i;
                $divisors[] = $number / $i;
            }
        }

        $divisors = array_unique($divisors);

        sort($divisors);

        return $divisors;
    }
}
