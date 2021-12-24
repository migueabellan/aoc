<?php

namespace Aoc\Enums;

use Aoc\Enums\Direction;
use PHPUnit\Framework\TestCase;

class DirectionTest extends TestCase
{
    /**
     * @dataProvider directions
     */
    public function testTurnLeft(string $current, array $expected): void
    {
        $direction = Direction::NORTH;
        $direction = $direction->from($current)->turnLeft();

        $this->assertEquals($direction->value, $expected['left']);
    }

    /**
     * @dataProvider directions
     */
    public function testTurnRight(string $current, array $expected): void
    {
        $direction = Direction::NORTH;
        $direction = $direction->from($current)->turnRight();

        $this->assertEquals($direction->value, $expected['right']);
    }

    public function directions(): \Iterator
    {
        yield [
            'NORTH',
            ['left' => 'WEST', 'right' => 'EAST']
        ];

        yield [
            'EAST',
            ['left' => 'NORTH', 'right' => 'SOUTH']
        ];

        yield [
            'SOUTH',
            ['left' => 'EAST', 'right' => 'WEST']
        ];

        yield [
            'WEST',
            ['left' => 'SOUTH', 'right' => 'NORTH']
        ];
    }
}
