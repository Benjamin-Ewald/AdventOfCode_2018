<?php
/**
 * Created by PhpStorm.
 * User: benjaminewald
 * Date: 05.12.18
 * Time: 14:45
 */

declare(strict_types=1);

namespace App\Tests;

use App\Advent01;
use PHPUnit\Framework\TestCase;


/**
 * Class Advent01Test
 */
class Advent01Test extends TestCase
{

    /**
     * @return array
     */
    public function numberProvider(): array
    {
        return [
            [3, [1, 1, 1]],
            [0, [1, 1, -2]],
            [-6, [-1, -2, -3]],
            [3, [1, -2, 3, 1]]
        ];
    }

    /**
     * @param int $expected
     * @param array $numbers
     * @return void
     *
     * @dataProvider numberProvider
     */
    public function testCalculate(int $expected, array $numbers): void
    {
        $this->assertEquals($expected, Advent01::calculate($numbers));
    }

}

