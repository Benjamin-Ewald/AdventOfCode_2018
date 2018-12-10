<?php
/**
 * Created by PhpStorm.
 * User: benjaminewald
 * Date: 05.12.18
 * Time: 14:45
 */

declare(strict_types=1);

namespace App\Tests;

use App\Advent03;

use PHPUnit\Framework\TestCase;

/**
 * Class Advent03Test
 */
class Advent03Test extends TestCase
{

    /**
     * @return array
     */
    public function numberProvider(): array
    {
        return [
            [['#1 @ 1,3: 4x4'], //something is wrong here. Unit test only takes first line.
            ['#2 @ 3,1: 4x4'],
            ['#3 @ 5,5: 2x2']]
        ];
    }

    /**
     * @param array $numbers
     * @return void
     *
     * @dataProvider numberProvider
     */
    public function testGiveOverlappingInches(array $numbers): void
    {
        $this->assertEquals(4, Advent03::giveOverlappingInches($numbers));
    }

}

