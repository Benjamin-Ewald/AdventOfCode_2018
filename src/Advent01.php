<?php
/**
 * Created by PhpStorm.
 * User: benjaminewald
 * Date: 05.12.18
 * Time: 14:44
 */

declare(strict_types=1);

namespace App;

/**
 * Class Advent01
 */
class Advent01 implements Advent_01_Interface
{
    /**
     * @param array $numbers
     * @return int
     */
    public static function calculate (array $numbers): int
    {
        $result = 0;
        foreach ($numbers as $number) {
            $result += $number;
        }
        return $result;
    }
}

