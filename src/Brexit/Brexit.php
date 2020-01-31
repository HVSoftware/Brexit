<?php
declare(strict_types=1);
/**
 * Package to help you with the Brexit.
 *
 * @author Harry van der Valk <info@hvsoftware.nl>
 * @package Brexit
 * @license MIT
 * @link https://packagist.org/packages/hvsoftware/brexit
 */

namespace Brexit;

/**
 * Class Brexit
 *
 * @package Brexit
 */
class Brexit
{
    /**
     * @var string
     */
    const EXIT_DATE_TIME = '31-01-2020T23:59';

    public static function exit(
        string $message = "This application is not supported anymore. Please consult the EU!",
        int $code = 1
    ): void {
        if (strtotime(self::EXIT_DATE_TIME) < time()) {
            echo $message;
            die($code);
        }
    }
}
