<?php
/**
 * Created by PhpStorm.
 * User: Ragnar
 * Date: 09/12/2018
 * Time: 21:23
 */

declare(strict_types=1);

namespace App;

class Advent04 implements Advent04Interface
{

    public static function sortGuardTimes(array $guardList) : array
    {
        natsort($guardList);
        return $guardList;
    }

    public static function buildTimeTable(array $guardList) : array
    {
        // Day => [ ID [ Minute => asleep]]
        $timeTable = array();


        foreach ($guardList as $input)
        {
            $inputExplosion = explode('] ', $input, 2);
            $timeStamp = trim($inputExplosion[0],'[');
            $action = $inputExplosion[1];
            var_dump($inputExplosion, $timeStamp, $action);

        }

        return $guardList;

    }
}

