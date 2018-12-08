<?php
/**
 * Created by PhpStorm.
 * User: Ragnar
 * Date: 08/12/2018
 * Time: 18:57
 */

declare(strict_types=1);

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Advent01;

$inputs = file(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'Advent01');

echo 'Calibrate Santas Chronical Device';
echo "\n\n";
echo 'Result is: ';
echo Advent01::calculate($inputs);
echo "\n\n";
echo 'finding matching numbers';
echo "\n\n";
echo 'Result is: ';
echo Advent01::findMatch($inputs);
echo "\n\n";
