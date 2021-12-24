<?php

namespace Aoc\Utils;

use Aoc\Utils\MathUtil;
use PHPUnit\Framework\TestCase;

class MathUtilTest extends TestCase
{
    /**
     * @dataProvider divisors
     */
    public function testDivisors(int $number, array $expected): void
    {
        $divisors = MathUtil::divisors($number);

        $this->assertEquals($divisors, $expected);
    }

    public function divisors(): \Iterator
    {
        yield [
            1,
            [1]
        ];

        yield [
            2,
            [1, 2]
        ];

        yield [
            3,
            [1, 3]
        ];

        yield [
            4,
            [1, 2, 4]
        ];

        yield [
            5,
            [1, 5]
        ];
    }
}
