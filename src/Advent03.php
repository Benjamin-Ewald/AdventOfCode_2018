<?php
/**
 * Created by PhpStorm.
 * User: Ragnar
 * Date: 09/12/2018
 * Time: 21:23
 */

declare(strict_types=1);

namespace App;

class Advent03 implements Advent03Interface
{

    /**
     * @param array $claimList
     * @return int
     */
    public static function giveOverlappingInches(array $claimList) : int
    {
        $fabric = array();

        foreach ($claimList as $claim)
        {
            var_dump($claim);
            $claimExplosion = explode(' ', $claim);
            $id = $claimExplosion[0];
            $coords = trim($claimExplosion[2],':');
            $size = $claimExplosion[3];
            var_dump($id, $coords, $size);
        }
    }
}
