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
        $previousTimestamp = '[23:57]';
        $activeGuard = '#0000';

        $startedEarly = false;
        $wasAsleep = false;
        $wokeUp = false;


        foreach ($guardList as $input)
        {
            $inputExplosion = explode('] ', $input, 2);
            $dateTime = trim($inputExplosion[0],'[');
            $dateTimeExplosion = explode(' ', $dateTime);
            $date = $dateTimeExplosion[0];
            $time = $dateTimeExplosion[1];
            $action = trim($inputExplosion[1]);
            //var_dump($inputExplosion, $date, $time, $action);

            //if guard begins shift
            //if timestamp 23:xx count difference to 00:00 && save in startedEarly
            //note guardID && save time

            //previousTimestamp to time as minutes && if startedEarly subtract diff

            //foreach minute save asleep/awake state to timeTable based on previous action
            

            $previousTimestamp = $time;

        }

        return $guardList;

    }
}

