<?php

namespace Aoc\Classes;

class Coord3D
{
    public function __construct(
        private int $x = 0,
        private int $y = 0,
        private int $z = 0
    ) {
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setY(int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getZ(): int
    {
        return $this->z;
    }

    public function setZ(int $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function __toString(): string
    {
        return sprintf('(%d, %d, %d)', $this->x, $this->y, $this->z);
    }
}
