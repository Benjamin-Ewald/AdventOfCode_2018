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
        ini_set('memory_limit', '512M');
        $fabric = array();
        $solution = 0;

        $idArray = array ();
        $inchOverlap = true;
        $claimCandidate = 0;

        foreach ($claimList as $claim)
        {
            $claimExplosion = explode(' ', $claim);
            $id = $claimExplosion[0];
            $coords = explode(',', trim($claimExplosion[2],':'));
            $fabricX = $coords[0] + 1;
            $fabricY = $coords[1] + 1;
            $size = explode('x',$claimExplosion[3]);
            $width = (int)$size[0];
            $height = (int)$size[1];

            for ($i = 0; $i < $width; $i++)
            {
                for ($i2 = 0; $i2 < $height; $i2++)
                {
                    $claimedInch = $fabricX . 'x' . $fabricY;
                    if (array_key_exists($claimedInch,$fabric)) {
                        $fabric[$claimedInch]++;
                    }
                    else {
                        $fabric[$claimedInch] = 0;
                    }
                    $fabricY++;

                    $idArray[$id][$claimedInch] = $fabric[$claimedInch]; // array needs to get filled after the loop
                }
                $fabricX++;
                $fabricY = $coords[1] + 1;
            }
        }
        foreach ($fabric as $inch => $count)
        {
            if ($count > 0){
                $solution++;
            }
        }

        foreach ($idArray as $id => $claim) {
            $inchOverlap = false;
            //var_dump($id, $claim);
            foreach ($claim as $claimedInch => $count) {
                  if ($count > 0) {
                      $inchOverlap = true;
                  }
            }
                if ($inchOverlap === false) {
                    $claimCandidate = $id;
                }
        }
        
        return $solution;
    }
}

