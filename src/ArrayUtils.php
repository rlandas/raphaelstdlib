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

    /**
     * Get the specific parameter given its key
     *
     * @param array $array
     * @param mixed $key Parameter name to retrieve.
     * @param mixed $default Default value to use when the parameter is missing.
     * @return mixed
     */
    static public function get (array $array, $key, $default = null)
    {
        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        return $default;
    }
}