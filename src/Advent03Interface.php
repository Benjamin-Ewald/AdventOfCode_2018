<?php
/**
 * Created by PhpStorm.
 * User: Ragnar
 * Date: 09/12/2018
 * Time: 21:23
 */

declare(strict_types=1);

namespace App;

interface Advent03Interface
{

    /**
     * @param array $claimList
     * @return int
     */
    public static function giveOverlappingInches(array $claimList) : int;

}

