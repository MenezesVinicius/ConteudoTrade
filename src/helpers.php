<?php

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
        $ip = $_SERVER['SERVER_ADDR'];

        if (PHP_OS == 'WINNT') {
            $ip = getHostByName(getHostName());
        }

        if (PHP_OS == 'Linux') {
            $command = "/sbin/ifconfig";
            exec($command, $output);

            $pattern = '/inet addr:?([^ ]+)/';

            $ip = array();
            foreach ($output as $key => $subject) {
                $result = preg_match_all($pattern, $subject, $subpattern);
                if ($result == 1) {
                    if ($subpattern[1][0] != "127.0.0.1")
                        $ip = $subpattern[1][0];
                }

            }
        }

        return sprintf('%u', ip2long($ip));
    }
} 