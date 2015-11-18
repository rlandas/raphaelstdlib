<?php

namespace Raphael\Stdlib;

abstract class StringUtils
{

    /**
     * Generate a random string
     *
     * @param integer $length
     * @param boolean $includeSymbols
     * @return string
     */
    static public function random ($length = 32, $includeSymbols = false)
    {
        $seed = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        if ($includeSymbols) {
            $seed .= '!#$%^&*().,?~';
        }

        $randomString = substr(str_shuffle($seed), 0, $length);
        return $randomString;
    }
}