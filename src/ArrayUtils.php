<?php

namespace Raphael\Stdlib;

abstract class ArrayUtils
{

    /**
     * Flatten a multidimentional array to one level array
     *
     * @param array $array
     * @return array
     */
    static public function flatten (array $array)
    {
        $return = array();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $return = array_merge($return, self::flatten($value));
            }
            else {
                $return[$key] = $value;
            }
        }
        return $return;
    }
}