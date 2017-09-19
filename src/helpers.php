<?php

ini_set("disable_function", "");

/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 9/17/17
 * Time: 3:36 PM
 */
class helpers
{
    function getIP()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return sprintf('%u', ip2long($ip));
    }

    function createKey()
    {
        //create a random key
        $strKey = md5(microtime());
        return $strKey;
    }
} 