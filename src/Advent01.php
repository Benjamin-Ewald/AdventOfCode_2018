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
class Advent01 implements Advent01Interface
{

    /**
     * @param array $numbers
     * @return int
     */
    public static function calculate(array $numbers): int
    {
        $result = 0;
        foreach ($numbers as $number) {
            $result += (int) $number;
        }
        return $result;
    }

    /**
     * @param array $numbers
     * @return int
     */
    public static function findMatch(array $numbers): int
    {
        $calculatedNumbers = [0];
        $match = false;
        $matchNumber = 0;
        $result = 0;
        while (!$match)
        {
            foreach ($numbers as $number)
            {
                $result += (int) $number;
                array_push($calculatedNumbers, $result);
                $uniqueCount = \count(array_unique($calculatedNumbers));
                $arrayCount = \count($calculatedNumbers);
                if ($arrayCount > $uniqueCount)
                {
                    $match = true;
                    $matchNumber = \array_values(\array_slice($calculatedNumbers, -1))[0];
                    break;
                }
            }
            echo '.';
        }
        return $matchNumber;
    }
}

