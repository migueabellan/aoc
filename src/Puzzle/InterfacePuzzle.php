<?php

namespace Aoc\Puzzle;

/**
 * Provides common features needed
 *
 * @author Miguel Ángel Abellán <@migueabellan>
 */
interface InterfacePuzzle
{
    /**
     * Map input file to array
     */
    public function read(): array;

    /**
     * Write output in
     */
    public function write(string $string): void;

    /**
     * Algorithm for first puzzle
     */
    public function exec1(array $array = []): string;

    /**
     * Algorithm for second puzzle
     */
    public function exec2(array $array = []): string;
}
