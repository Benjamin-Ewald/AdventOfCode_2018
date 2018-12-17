<?php
/**
 * Created by PhpStorm.
 * User: Ragnar
 * Date: 09/12/2018
 * Time: 21:23
 */

declare(strict_types=1);

namespace App;

interface Advent04Interface
{

    /**
     * @param array $GuardTimeList
     * @return array
     */
    public static function sortGuardTimes(array $GuardTimeList) : array;

    /**
     * @param array $guardList
     * @return array
     */
    public static function buildTimeTable(array $guardList) : array;

}

