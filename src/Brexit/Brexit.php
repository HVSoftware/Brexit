<?php

namespace Brexit;

/**
 * Class to help you with the Brexit
 *
 * @author Harry van der Valk
 */
class Brexit
{
    /**
     * @var string
     */
    CONST EXIT_DATE_TIME = '31-01-2020T23:59';

    /**
     * @param $message
     * @param $code
     *
     * @return string
     */
    public static function exit($message = "This application is not supported anymore. Please consult the EU!", $code = 1)
    {
        if (strtotime(self::EXIT_DATE_TIME) < time()) {
            echo $message;
            die($code);
        }
    }
}
