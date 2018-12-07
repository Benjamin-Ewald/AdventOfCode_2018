<?php
/**
 * Created by PhpStorm.
 * User: benjaminewald
 * Date: 05.12.18
 * Time: 14:45
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

namespace App\Tests;

/**
 * Class Advent01Test
 */
class Advent01Test extends TestCase
{

    /**
     * @param int $expected
     * @param array $numbers
     * @return void
     *
     * @dataProvider numberProvider
     */
    public function testCalculate ($expected, $numbers): void
    {
        $this->assertEquals($expected, Advent01::calculate($numbers));
    }

    /**
     * @return array
     */
    public function numberProvider()
    {
        return [
            [3, [1, 1, 1]],
            [0, [1, 1, -2]],
            [-6, [-1, -2, -3]],
            [3, [1, -2, 3, 1]]
        ];
    }
}
