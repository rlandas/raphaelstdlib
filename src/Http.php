<?php

namespace Raphael\Stdlib;

abstract class Http
{

    /**
     * Get the IP of the client
     *
     * @return string
     */
    static public function clientIp ()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            // check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    /**
     * Get the client's browser user agent
     *
     * @return string
     */
    static public function userAgent ()
    {
        return isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;
    }
}