<?php

namespace Raphael\Stdlib;

abstract class Numeric
{

    /**
     * Generates a random character string
     *
     * @param integer $length
     * @return string
     */
    static public function randomInt ($min = 0, $max = PHP_INT_MAX)
    {
        $tmp = (int) min($max, $min);
        $max = (int) max($min, $max);
        $min = $tmp;
        $random = mt_rand($min, $max);
        return $random;
    }
}