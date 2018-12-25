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
        $previousDate = '1500-00-00';
        $activeGuard = '#0000';

        $startedEarly = false;
        $wasAsleep = false;
        $wokeUp = false;
        $isAwake = false;
        $isAsleep = false;


        foreach ($guardList as $input)
        {
            $inputExplosion = explode('] ', $input, 2);
            $dateTime = trim($inputExplosion[0],'[');
            $dateTimeExplosion = explode(' ', $dateTime);
            $date = $dateTimeExplosion[0];
            $time = $dateTimeExplosion[1];
            $action = trim($inputExplosion[1]);


            //if guard begins shift
            if ( preg_match('[#+]', $action)) {
                //if timestamp 23:xx count difference to 00:00 && save in startedEarly
                if (preg_match('[23:+]', $time)) {
                    $startedEarly = true;
                    //$time = '00:00';
                }
                $activeGuard = explode(' ', $action)[1];
                $isAwake = true;
            }

            $timeTable[$date][$activeGuard][$time] =  $action;

            $previousTimestamp = $time;
            $previousDate = $date;

        }

        return $timeTable;
    }

    public static function calculateTimeTable(array $timeTable) : array
    {

        $isAwake = false;
        $isAsleep = false;

        foreach ($timeTable as $day => $id) {
            //var_dump($day,$id);
            foreach ($id as $id2 => $time) {

                foreach ($time as $minutes => $action) {
                    var_dump($minutes, $action);
                }

            }

        }


        return $timeTable;

    }

}

