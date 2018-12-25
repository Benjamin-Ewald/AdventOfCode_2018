<?php
/**
 * Created by PhpStorm.
 * User: Ragnar
 * Date: 08/12/2018
 * Time: 18:57
 */

declare(strict_types=1);

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Advent04;

$inputs = file(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'Advent04');

$sortedGuardTimes = array();
$timeTable = array();
$calculatedTimeTable = array();

echo 'Calculating amount of overlapping fabric inches';
echo "\n\n";
echo 'Result is: ';
//echo \App\Advent03::giveOverlappingInches($inputs);
$sortedGuardTimes = \App\Advent04::sortGuardTimes($inputs);
$timeTable = \App\Advent04::buildTimeTable($sortedGuardTimes);
$calculatedTimeTable = \App\Advent04::calculateTimeTable($timeTable);
//var_dump($calculatedTimeTable);
echo "\n\n";