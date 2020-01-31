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
    const EXIT_DATE_TIME = '31-01-2020T23:59';
    const EXIT_TRANSITION_PERIOD_DATE_TIME = '31-12-2020T23:59';

    public static function exit(
        string $message = "This application is not supported after the Brexit date. Please consult the EU!",
        int $code = 1
    ): void {
        if (strtotime(self::EXIT_DATE_TIME) < time()) {
            echo $message;
            die($code);
        }
    }

    public static function exitOnTransitionPeriod(
        string $message = "This application is not supported after the transition period. Please consult the VK!",
        int $code = 1
    ): void {
        if (strtotime(self::EXIT_TRANSITION_PERIOD_DATE_TIME) < time()) {
            echo $message;
            die($code);
        }
    }
}
